<?php declare(strict_types=1);
namespace Zend\C;

use Zend\C\Engine\Node;
use Zend\C\Engine\Node\Decl;
use Zend\C\Engine\Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl;
use Zend\C\Engine\Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl;
use Zend\C\Engine\Node\Stmt;
use Zend\C\Engine\Node\Stmt\ValueStmt\Expr;
use Zend\C\Engine\Node\TranslationUnitDecl;
use Zend\C\Engine\Node\Type;
use Zend\C\Engine\Printer;


class PhpPrinter
{
    protected $level=0;
    function print(TranslationUnitDecl $node, array &$array=Null) {
        if(!isset($array)) $array = array();
        if(!isset($array['typedefs'])) $array['typedefs'] = array();
        if(!isset($array['enums']))    $array['enums'] = array();
        if(!isset($array['structs']))  $array['structs'] = array();
        if(!isset($array['unions']))   $array['unions'] = array();
        $this->printNode($node, $array);
    }
    function printNode(Node $node, array &$array) {
        if ($node instanceof TranslationUnitDecl) {
            if(empty($node->declarations))
                return;
            return $this->printNodes($node->declarations, $array);
        } elseif ($node instanceof Decl) {
            $this->printDecl($node, $array);
            return;
        } elseif ($node instanceof Type\PointerType) {
            $this->printType($node, $array);
            return ;
        } else {
            var_dump($node);
            echo "Not implemented\n";
            return ;
        }/* elseif ($node instanceof Expr) {
            return $this->printExpr($node);
        } elseif ($node instanceof Stmt) {
            return $this->printStmt($node);
        }
        */
    }

    function printNodes(array $nodes, array &$array) {
        foreach ($nodes as $node) {
            $this->printNode($node, $array);
        }
    }
    protected function printDecl(Decl $node, array &$array) {
        $this->level++;
        if ($node instanceof Decl\NamedDecl\TypeDecl\TypedefNameDecl\TypedefDecl) {
            $typedef = array('name'=>$node->name);
            $this->printType($node->type, $typedef);
            switch($typedef['type']) {
                case 'enum':
                    $array['typedefs'][$node->name] = array('name'=>$typedef['name'], 'type'=>$typedef['type']);
                    $array['enums'][$node->name] = $typedef;
                    break;
                case 'union':
                    $array['typedefs'][$node->name] = array('name'=>$typedef['name'], 'type'=>$typedef['type']);
                    $array['unions'][$node->name] = $typedef;
                    break;
                case 'struct':
                    $array['typedefs'][$node->name] = array('name'=>$typedef['name'], 'type'=>$typedef['type']);
                    $array['structs'][$node->name] = $typedef;
                    break;
                default:
                    $array['typedefs'][$node->name] = $typedef;
                    break;
            }
        } else  if ($node instanceof RecordDecl) {
            if ($node->kind==RecordDecl::KIND_UNION) {
                if ($this->level>1) {
                    $this->printUnion($node, $array);
                } else {
                    $union = array('name'=>$node->name);
                    $this->printUnion($node, $union);
                    $array['unions'][$node->name] = $union;
                }
            } else if ($node->kind==RecordDecl::KIND_STRUCT) {
                if ($this->level>1) {
                    $this->printStruct($node, $array);
                } else {
                    $struct = array('name'=>$node->name);
                    $this->printStruct($node, $struct);
                    $array['structs'][$node->name] = $struct;
                }
            } else {
                echo "Error 44 : not implemented\n";
            }
        } else if ($node instanceof EnumDecl) {
            if ($this->level>1) {
                $this->printEnum($node, $array);
            } else {
                $enum = array('name'=>$node->name);
                $this->printEnum($node, $enum);
                $array['unions'][$node->name] = $enum;
            }
        } else if ($node instanceof Decl\NamedDecl\ValueDecl\DeclaratorDecl\FunctionDecl) {
            if ($this->level>1) {
                $this->printType($node->type, $array);
            } else {
                $func = array('name'=>$node->name);
                $this->printType($node->type, $func);
                $array['functions'][$node->name] = $func;
            }
        } else {
            var_dump($node);
            echo "Not implemented\n";
        }

        $this->level--;
    }

    protected function printStruct(Decl $node, &$array) {
        $array['name'] = ''.$node->name;
        $array['type'] = 'struct';
        $members = array();
        if (!empty($node->fields))
        foreach ($node->fields as $field) {
            $member  = array('name'=>$field->name);
            $this->printType($field->type, $member);
            $array['members'][$field->name] = $member;
            if (isset($field->initializer)) {
                $array['members'][$field->name]['size'] = $field->initializer->value;
            }
        }
    }

    protected function printEnum(Decl $decl, array &$array) {
        $array['name'] = ''.$decl->name;
        $array['type'] = 'enum';
        $constants = array();
        foreach ($decl->fields as $field) {
            $constant = array('name'=>$field->name, 'expression'=>Null, 'value'=>Null);
            if (isset($field->value)) {
                $constant['expression']=$this->printExpr($field->value, 0);
            }
            if ($field->value instanceof Expr\IntegerLiteral) {
                $exp = $this->printExpr($field->value, 0);
                if (is_numeric($exp)) {
                    $constant['value']=\intval($exp);
                }
            }

            $array['constants'][$field->name] = $constant;
        }
    }

    protected function printUnion(Decl $decl, array &$array) {
        $array['name'] = ''.$decl->name;
        $array['type'] = 'union';
        $members = array();
        if(is_array($decl->fields))
        foreach ($decl->fields as $field) {
            $member  = array('name'=>$field->name);
            $this->printType($field->type, $member);
            $array['members'][$field->name] = $member;
        }
    }

    protected function printType(Type $node, array &$array) {
        if($node instanceof Type\BuiltinType) {
            $array['type']=$node->name;
        } else if($node instanceof Type\TypedefType) {
            $array['type']=$node->name;
        } else if ($node instanceof Type\ArrayType\ConstantArrayType) {
            $array['type']='array';
            if ($node->parent instanceof Type\PointerType) {
                $value = array();
                $this->printType($node->parent, $value);
                $array['value'] = $value;
            } else {
                $array['value']=array(
                    'type'=>$node->parent->name,
                );
            }
            // TODO: $this->printExpr($node->size);
            $array['size']=$node->size->value;// $this->printExpr($type->size)
            //$array['modifier']='unsigned';
            //$array['pass']='*';
            //$array['qualifier']= 'const';
        } else if ($node instanceof Type\TagType\RecordType) {
            $this->printDecl($node->decl, $array);
        } else if ($node instanceof Type\TagType\EnumType) {
            $this->printDecl($node->decl, $array);
        } else if ($node instanceof Type\PointerType) {
            $parent = $node;
            //var_dump($node);
            $pass='*';
            while(isset($parent->parent)) {
                $parent = $parent->parent;
                if ($parent  instanceof Type\PointerType) {
                    $pass .= '*';
                } else {
                    break;
                }
            }
            if ($parent instanceof Type\FunctionType\FunctionProtoType) {
                $this->printType($parent, $array);
                /*
                $array['type']= 'function';
                $return=array();
                $this->printType($parent->return, $return);
                $parameters=array();
                foreach ($parent->params as $idx => $param) {
                    $parameter=array();
                    //for($parent_param = $param; isset($parent_param->parent); $parent_param = $parent_param->parent);
                    $name_param = $parent->paramNames[$idx];
                    $parameter['name']=$name_param;
                    $this->printType($param, $parameter);
                    $parameters[$name_param]=$parameter;
                }
                if ($parent->isVariadic) {
                    $parameters[]='...';
                }
                $array['signature']= array(
                    'return'=>$return,
                    'parameters'=>$parameters
                );
                */
            } else {
                if($parent instanceof Type\ParenType) {
                    $this->printType($parent->parent, $array);
                } elseif (isset($parent->name)) {//Node\Type\BuiltinType
                    $array['type']= $parent->name;
                } else if ($parent instanceof Type\AttributedType) {// parent == Node\Type\TagType\RecordType
                    $this->printType($parent, $array);
                } else if (True) {// parent == Node\Type\TagType\RecordType
                    $array['type']= $parent->decl->name;
                }
            }
            $array['pass']= $pass;
        } else if ($node instanceof Type\AttributedType) {
            $this->printType($node->parent, $array);
        } elseif ($node instanceof Type\FunctionType\FunctionProtoType) {
            $array['type']= 'function';
            $return=array();
            $this->printType($node->return, $return);
            $parameters=array();
            foreach ($node->params as $idx => $param) {
                $parameter=array();
                //for($parent_param = $param; isset($parent_param->parent); $parent_param = $parent_param->parent);
                $name_param = $node->paramNames[$idx];
                $parameter['name']=$name_param;
                $this->printType($param, $parameter);
                $parameters[$name_param]=$parameter;
            }
            if ($node->isVariadic) {
                $parameters[]='...';
            }
            $array['signature']= array(
                'return'=>$return,
                'parameters'=>$parameters
            );
        } else if ($node instanceof Type\ArrayType\IncompleteArrayType) {
            $array['type']='array';
            if ($node->parent instanceof Type\PointerType) {
                $value = array();
                $this->printType($node->parent, $value);
                $array['value'] = $value;
            } else if ($node->parent instanceof Type\AttributedType) {
                if ($node->parent->parent instanceof Type\PointerType) {
                    $value = array();
                    $this->printType($node->parent->parent, $value);
                    $array['size']=-1;
                    $array['value']=$value;
                } else {
                    var_dump($node);
                }
            } else {
                //var_dump($node);
                $array['value']=array(
                    'type'=>$node->parent->name,
                );
            }
        } else {
            echo get_class($node)."\n";
            echo "Error 55: Not implemented\n";
        }
    }


    const BINARYOPERATOR_MAP = [
        Expr\BinaryOperator::KIND_ADD         => '+',
        Expr\BinaryOperator::KIND_SUB         => '-',
        Expr\BinaryOperator::KIND_MUL         => '*',
        Expr\BinaryOperator::KIND_DIV         => '/',
        Expr\BinaryOperator::KIND_REM         => '%',
        Expr\BinaryOperator::KIND_SHL         => '<<',
        Expr\BinaryOperator::KIND_SHR         => '>>',
        Expr\BinaryOperator::KIND_LT          => '<',
        Expr\BinaryOperator::KIND_GT          => '>',
        Expr\BinaryOperator::KIND_LE          => '<=',
        Expr\BinaryOperator::KIND_GE          => '>=',
        Expr\BinaryOperator::KIND_EQ          => '==',
        Expr\BinaryOperator::KIND_NE          => '!=',
        Expr\BinaryOperator::KIND_BITWISE_AND => '&',
        Expr\BinaryOperator::KIND_BITWISE_XOR => '^',
        Expr\BinaryOperator::KIND_BITWISE_OR  => '|',
        Expr\BinaryOperator::KIND_LOGICAL_AND => '&&',
        Expr\BinaryOperator::KIND_LOGICAL_OR  => '||',
        Expr\BinaryOperator::KIND_COMMA       => ',',
        Expr\BinaryOperator::KIND_ASSIGN      => '=',
        Expr\BinaryOperator::KIND_MUL_ASSIGN  => '*=',
        Expr\BinaryOperator::KIND_DIV_ASSIGN  => '/=',
        Expr\BinaryOperator::KIND_REM_ASSIGN  => '%=',
        Expr\BinaryOperator::KIND_ADD_ASSIGN  => '+=',
        Expr\BinaryOperator::KIND_SUB_ASSIGN  => '-=',
        Expr\BinaryOperator::KIND_SHL_ASSIGN  => '<<=',
        Expr\BinaryOperator::KIND_SHR_ASSIGN  => '>>=',
        Expr\BinaryOperator::KIND_AND_ASSIGN  => '&-',
        Expr\BinaryOperator::KIND_XOR_ASSIGN  => '^=',
        Expr\BinaryOperator::KIND_OR_ASSIGN   => '|=',
    ];

    const UNARYOPERATOR_PRE_MAP = [
        Expr\UnaryOperator::KIND_PREINC => '++',
        Expr\UnaryOperator::KIND_PREDEC => '--',
        Expr\UnaryOperator::KIND_ADDRESS_OF => '&',
        Expr\UnaryOperator::KIND_DEREF => '*',
        Expr\UnaryOperator::KIND_PLUS => '+',
        Expr\UnaryOperator::KIND_MINUS => '-',
        Expr\UnaryOperator::KIND_BITWISE_NOT => '~',
        Expr\UnaryOperator::KIND_LOGICAL_NOT => '!',
        Expr\UnaryOperator::KIND_SIZEOF => 'sizeof',
        Expr\UnaryOperator::KIND_ALIGNOF => 'alignof',
    ];
    const UNARYOPERATOR_POST_MAP = [
        Expr\UnaryOperator::KIND_POSTINC => '++',
        Expr\UnaryOperator::KIND_POSTDEC => '--',
    ];

    protected function printExpr(Expr $expr, int $level): string {
        if ($expr instanceof Expr\IntegerLiteral) {
            return (string) $expr->value;
        }
        if ($expr instanceof Expr\BinaryOperator) {
            if (isset(self::BINARYOPERATOR_MAP[$expr->kind])) {
                return '(' . $this->printExpr($expr->left, $level) . ' ' . self::BINARYOPERATOR_MAP[$expr->kind] . ' ' . $this->printExpr($expr->right, $level) . ')';
            }
            throw new \LogicException('Unknown binaryoperator kind: ' . $expr->kind);
        }
        if ($expr instanceof Expr\UnaryOperator) {
            if (isset(self::UNARYOPERATOR_PRE_MAP[$expr->kind])) {
                return '(' . self::UNARYOPERATOR_PRE_MAP[$expr->kind] . ' ' . $this->printExpr($expr->expr, $level) . ')';
            }
            if (isset(self::UNARYOPERATOR_POST_MAP[$expr->kind])) {
                return '(' . $this->printExpr($expr->expr, $level) . self::UNARYOPERATOR_POST_MAP[$expr->kind] . ')';
            }
            throw new \LogicException('Unknown unary operator kind: ' . $expr->kind);
        }
        if ($expr instanceof Expr\TypeRefExpr) {
            return $expr->type->name;
            //return '(' . $this->printType($expr->type, null, $level) . ')';
        }
        if ($expr instanceof Expr\CastExpr) {
            return '(' . $this->printExpr($expr->type, $level) . $this->printExpr($expr->expr, $level) . ')';
        }
        if ($expr instanceof Expr\DeclRefExpr) {
            return $expr->name;
        }
        if ($expr instanceof Expr\AbstractConditionalOperator\ConditionalOperator) {
            return '(' . $this->printExpr($expr->cond, $level) . ' ? ' . $this->printExpr($expr->ifTrue, $level) . ' : ' . $this->printExpr($expr->ifFalse, $level) . ')';
        }
        if ($expr instanceof Expr\CallExpr) {
            $args = [];
            foreach ($expr->args as $arg) {
                $args[] = $this->printExpr($arg, $level);
            }
            return $this->printExpr($expr->fn, $level) . '(' . implode(', ', $args) . ')';
        }
        if($expr instanceof Expr\StringLiteral) {
            return $expr->value;
        }
    }


    protected $script = '';
    public function evaluate(&$array) {

        $this->script = '';
        if (isset($array['enums']))
        foreach($array['enums'] as $name => $enum) {
            $count = -1;
            foreach($enum['constants'] as $key=>$constant) {
                //var_export($constant['value']);
                if (is_integer($constant['value'])) {
                    $value = $constant['value'];
                    $this->script .= "!defined('$key') ? define('$key', $value) : null;\n";
                    $count = $value;
                } else if (is_numeric($constant['expression'])) {
                    $count = intval($constant['expression']);
                    $array['enums'][$name]['constants'][$key]['value']=$count;
                    $this->script .= "!defined('$key') ? define('$key', $count) : null;\n";
                } else if (empty($constant['expression'])) {
                    $value = ++$count;
                    $array['enums'][$name]['constants'][$key]['value']=$value;
                    $this->script .= "!defined('$key') ? define('$key', $value) : null;\n";
                } else if(strlen($constant['expression'])==1 && ctype_print($constant['expression'])){
                    $value = ord($constant['expression']);
                    $array['enums'][$name]['constants'][$key]['value']=$value;
                    $count = $value;
                }
            }
        }

        //echo $this->script . PHP_EOL;
        if (isset($array['enums']))
        foreach($array['enums'] as $name => $enum) {
            foreach($enum['constants'] as $key=>$constant) {
                if (!isset($constant['value'])) {
                    $script = $this->script . 'return '.$constant['expression'].';';
                    //echo 'First loop'.PHP_EOL;
                    /*try {
                        $value = eval($script);
                    } catch (Error $exc) {
                        remains (si une constante est defini après... ordre de définition des enum
                    }*/
                    $value = eval($script);
                    $val = intval($value);
                    $array['enums'][$name]['constants'][$key]['value']= $val;
                    $this->script .= "!defined('$key') ? define('$key', $val) : null;\n";
                }
            }
        }
    }
}

