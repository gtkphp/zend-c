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
        if(!isset($array)) {
            $array = array(/*'typedefs'=>array(), 'enums'=>array(), 'structs'=>array(), 'unions'=>array()*/);
        }
        $this->printNode($node, $array);
    }
    function printNode(Node $node, array &$array) {
        if ($node instanceof TranslationUnitDecl) {
            return $this->printNodes($node->declarations, $array);
        } elseif ($node instanceof Decl) {
            $this->printDecl($node, $array);
            return;
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
            return;
        }
        if ($node instanceof RecordDecl) {
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
            return;
        }
        if ($node instanceof EnumDecl) {
            if ($this->level>1) {
                $this->printEnum($node, $array);
            } else {
                $enum = array('name'=>$node->name);
                $this->printEnum($node, $enum);
                $array['unions'][$node->name] = $enum;
            }
        }
        $this->level--;
    }

    /*protected function printEnum(Dec $node, &$array) {
        $array['name'] = ''.$node->name;
        $array['type'] = 'enum';
        $constants = array();
        foreach ($node->fields as $field) {
            $constant  = array('name'=>$field->name);
            $this->printType($field, $constant);
            $array['members'][$field->name] = $constant;
        }
    }*/
    protected function printStruct(Decl $node, &$array) {
        $array['name'] = ''.$node->name;
        $array['type'] = 'struct';
        $members = array();
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
            $array['value']=array(
                'type'=>$node->parent->name,
            );
            // TODO: $this->printExpr($node->size);
            $array['size']=$node->size->value;// $this->printExpr($type->size)
            // in Printer\C it's called attributed...
            //$array['modifier']='*';
            //$array['qualifier']= 'const';
        } else if ($node instanceof Type\TagType\RecordType) {
            $this->printDecl($node->decl, $array);
        } else if ($node instanceof Type\TagType\EnumType) {
            $this->printDecl($node->decl, $array);
        } else if ($node instanceof Type\PointerType) {
            $array['type']= $node->parent->name;
            $array['modifier']= '*';
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
            return '(' . $this->printType($expr->type, null, $level) . ')';
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
