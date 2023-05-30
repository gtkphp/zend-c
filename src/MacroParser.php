<?php

namespace Zend\C;

use Exception;
use Zend\C\Engine\PreProcessor\Token;

/**
 * @var Token $current
 */
class MacroParser
{
    protected $current;

    public function __construct() {
    }

    public function parse(Token $ast) {
        $this->current = $ast;


        $arguments = null;
        $this->parseMacroParameters($arguments);
        /*if (!$this->current) {
            throw new Exception("stop");
        }*/
        while ($this->current && $this->current->type == Token::WHITESPACE) {
            $this->current = $this->current->next;
        }
        $literal = null;
        $this->parseMacroExpression($literal);
        //var_dump($literal);
        //print_r($arguments);
        $signature = array('parameters'=>array(), 'return'=>array('type'=>''));
        if (isset($arguments))
        foreach ($arguments as $argument) {
            $signature['parameters'][$argument] = array('name'=>$argument, 'type'=>'');
        }
        
        return array(
            'name' => '',
            'type' => 'macro',
            'role' => isset($arguments) ? 'function':'constant',
            'signature' => $signature,
            'value' => $literal,
        );
    }

    public function printMacro( $ast) {
        /*
        switch ($ast->type) {
            case \Zend\C\Engine\PreProcessor\Token::IDENTIFIER :
                echo "IDENTIFIER\n";
                break;
            case \Zend\C\Engine\PreProcessor\Token::NUMBER :
                echo "NUMBER\n";
                break;
            case \Zend\C\Engine\PreProcessor\Token::LITERAL :
                echo "LITERAL\n";
                break;
            case \Zend\C\Engine\PreProcessor\Token::PUNCTUATOR :
                echo "PUNCTUATOR\n";
                break;
            case \Zend\C\Engine\PreProcessor\Token::WHITESPACE :
                echo "WHITESPACE\n";
                break;
            case \Zend\C\Engine\PreProcessor\Token::OTHER :
                echo "OTHER\n";
                break;
            default:
                break;
        }
        */
    }

    public function parseMacroParameters(&$arguments) {
        $args = array();
        $token = $this->current;
        $ast = $token;
        if ($token->type == Token::PUNCTUATOR && $token->value == '(') {
            $token = $token->next;
            while ($token->type == Token::WHITESPACE) {
                $token = $token->next;
            }
            $this->current = $token;
            $this->parseMacroParameterList($args);
            $token = $this->current;
            if ($token->type == Token::PUNCTUATOR && $token->value == ')') {// WITHSPACE ...
                $arguments = $args;
                $this->current = $token->next;
                return true;
            } else {
                $this->current = $ast;
                return false;// error
            }
        }
        return true;
    }

    public function parseMacroParameterList(&$arguments) {
        $this->parseMacroParameter($argument);
        $next = $this->current;
        while ($next->type == Token::WHITESPACE) {
            $next = $next->next;
        }
        if ($next->type == Token::PUNCTUATOR && $next->value == ')') {
            $arguments[] = $argument;
        } else if ($next->type == Token::PUNCTUATOR && $next->value == ',') {
            $arguments[] = $argument;
            $this->current = $next->next;
            $this->parseMacroParameterList($arguments);
            $next = $this->current;
        } else {
            return false;
        }
        
        $this->current = $next;
        return true;
    }

    public function parseMacroParameter(&$argument) {
        $ast = $this->current;
        while ($ast->type == Token::WHITESPACE) {
            $ast = $ast->next;
        }
        if ($ast->type == Token::IDENTIFIER) {
            $argument = $ast->value;
            $ast = $ast->next;
        }
        $this->current = $ast;
        return true;
    }

    public function parseMacroExpression(&$expression) {
        $token = $this->current;
        if ($token && $token->type == Token::LITERAL) {
            $expression = $token->value;
            $this->current = $token->next;
        } else if ($token && $token->type == Token::NUMBER) {
            $expression = 0 + $token->value;
            $this->current = $token->next;
        }

        return true;
    }
}
