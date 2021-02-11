<?php

namespace Zend\C;

use Zend\C\Node\Stmt\ValueStmt\Expr;

use Zend\C\Engine\ParserAbstract;


/* This is an automatically GENERATED file, which should not be manually edited.
 */
class ExpressionParser extends ParserAbstract
{
    protected $tokenToSymbolMapSize = 260;
    protected $actionTableSize = 30;
    protected $gotoTableSize = 10;

    protected $invalidSymbol = 16;
    protected $errorSymbol = 1;
    protected $defaultAction = -32766;
    protected $unexpectedTokenRule = 32767;

    protected $YY2TBLSTATE = 19;
    protected $numNonLeafStates = 23;

    //protected $semValue;
    //protected $semStack;

    protected $symbolToName = array(
        "EOF",
        "error",
        "DIGIT",
        "LETTER",
        "'|'",
        "'&'",
        "'+'",
        "'-'",
        "'*'",
        "'/'",
        "'%'",
        "'\n'",
        "'='",
        "'('",
        "')'",
        "UMINUS"
    );

    protected $tokenToSymbol = array(
        0, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        11, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 10, 5, 16,
        13, 14, 8, 6, 16, 7, 16, 9, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 12, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 4, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
        16, 16, 16, 16, 16, 16, 1, 2, 3, 15
    );

    protected $action = array(
        12, 13, 14, 15, 16, 40, 10, 11, 10, 11,
        7, 0, 19, 38, 20, 0, 8, 41, 29, -32766,
        -32766, 11, 0, 26, 0, 25, 0, 0, 0, 9
    );

    protected $actionCheck = array(
        6, 7, 8, 9, 10, 2, 4, 5, 4, 5,
        7, 0, 1, 3, 3, -1, 13, 2, 14, 6,
        7, 5, -1, 11, -1, 11, -1, -1, -1, 12
    );

    protected $actionBase = array(
        0, 4, 2, 2, 11, 16, -6, 10, 10, 10,
        10, 10, 10, 10, 10, 10, 10, 13, 13, 12,
        17, 14, 15, 0, -6, -6, -6, 3, -6, 0,
        3, 3, 3, 3, 3, 3, 3, 3, 3, 3,
        -6, -6
    );

    protected $actionDefault = array(
        1, 32767, 4, 5, 32767, 13, 12, 32767, 32767, 32767,
        32767, 32767, 32767, 32767, 32767, 32767, 32767, 7, 8, 32767,
        15, 32767, 16
    );

    protected $goto = array(
        37, 1, 3, 5, 6, 17, 18, 32, 33, 34
    );

    protected $gotoCheck = array(
        3, 3, 3, 3, 3, 3, 3, 3, 3, 3
    );

    protected $gotoBase = array(
        0, 0, 0, -7, 0
    );

    protected $gotoDefault = array(
        -32768, 4, 21, 2, 22
    );

    protected $ruleToNonTerminal = array(
        0, 1, 1, 1, 2, 2, 3, 3, 3, 3,
        3, 3, 3, 3, 3, 3, 3, 4, 4
    );

    protected $ruleToLength = array(
        1, 0, 3, 3, 1, 3, 3, 3, 3, 3,
        3, 3, 3, 3, 2, 1, 1, 1, 2
    );

    protected $productions = array(
        "\$start : list",
        "list : /* empty */",
        "list : list stat '\n'",
        "list : list error '\n'",
        "stat : expr",
        "stat : LETTER '=' expr",
        "expr : '(' expr ')'",
        "expr : expr '+' expr",
        "expr : expr '-' expr",
        "expr : expr '*' expr",
        "expr : expr '/' expr",
        "expr : expr '%' expr",
        "expr : expr '&' expr",
        "expr : expr '|' expr",
        "expr : '-' expr",
        "expr : LETTER",
        "expr : number",
        "number : DIGIT",
        "number : number DIGIT"
    );

    protected function initReduceCallbacks()
    {
        $this->reduceCallbacks = [
            0 => function ($stackPos) {
                /* noact */
                /*$this->semValue = $this->semStack($stackPos);*/
            },
            1 => function ($stackPos) {
                /* noact */
                /*$this->semValue = $this->semStack($stackPos);*/
            },
            2 => function ($stackPos) {
                /* noact */
                /*$this->semValue = $this->semStack($stackPos);*/
            },
            3 => function ($stackPos) {
                /* reduce */
                throw new Error('Unexpected');
            },
            4 => function ($stackPos) {
                /* reduce */
                echo '$1=' . ($stackPos - (1 - 1)) . "\n";
            },
            5 => function ($stackPos) {
                /* reduce */
                echo '($1)' . ($stackPos - (3 - 1)) . ' = ' . '($3)' . ($stackPos - (3 - 3)) . PHP_EOL;
            },
            6 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 2);
            },
            7 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) + $stackPos - (3 - 3);
            },
            8 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) - $stackPos - (3 - 3);
            },
            9 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) * $stackPos - (3 - 3);
            },
            10 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) / $stackPos - (3 - 3);
            },
            11 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) % $stackPos - (3 - 3);
            },
            12 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) & $stackPos - (3 - 3);
            },
            13 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (3 - 1) | $stackPos - (3 - 3);
            },
            14 => function ($stackPos) {
                /* reduce */
                $this->semValue = -$stackPos - (2 - 2);
            },
            15 => function ($stackPos) {
                /* reduce */
                /*$$  =  regs[$1];*/
            },
            16 => function ($stackPos) {
                /* noact */
                /*$this->semValue = $this->semStack($stackPos);*/
            },
            17 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (1 - 1);
            },
            18 => function ($stackPos) {
                /* reduce */
                $this->semValue = $stackPos - (2 - 1) + $stackPos - (2 - 2);
            },
        ];
    }

    /*protected function doParse()
    {
        echo 'doParse' . PHP_EOL;
        $state = 0;
        if ($this->actionBase[$state] === 0) {
            $rule = $this->actionDefault[$state];
        } else {
        }
    }*/
}
