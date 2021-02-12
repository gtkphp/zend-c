<?php

namespace Zend\C;

use Zend\C\Engine\Lexer;
use Zend\C\Engine\Node\Stmt\ValueStmt\Expr;
use Zend\C\Engine\Node;
use Zend\C\Engine\IR;

use Zend\C\Engine\ParserAbstract;


/* This is an automatically GENERATED file, which should not be manually edited.
 */
class ExpressionParser extends ParserAbstract
{

    function __construct(Lexer $lexer) {
        parent::__construct($lexer);
        $this->tokenToSymbolMapSize = 332;
        $this->actionTableSize      = 503;
        $this->gotoTableSize        = 279;

        $this->invalidSymbol       = 101;
        $this->errorSymbol         = 1;
        $this->defaultAction       = -32766;
        $this->unexpectedTokenRule = 32767;

        $this->YY2TBLSTATE = 177;
        $this->numNonLeafStates  = 259;

        $this->symbolToName = array(
            "EOF",
            "error",
            "IDENTIFIER",
            "I_CONSTANT",
            "F_CONSTANT",
            "STRING_LITERAL",
            "FUNC_NAME",
            "SIZEOF",
            "PTR_OP",
            "INC_OP",
            "DEC_OP",
            "LEFT_OP",
            "RIGHT_OP",
            "LE_OP",
            "GE_OP",
            "EQ_OP",
            "NE_OP",
            "NOT_OP",
            "AND_OP",
            "OR_OP",
            "MUL_ASSIGN",
            "DIV_ASSIGN",
            "MOD_ASSIGN",
            "ADD_ASSIGN",
            "SUB_ASSIGN",
            "LEFT_ASSIGN",
            "RIGHT_ASSIGN",
            "AND_ASSIGN",
            "XOR_ASSIGN",
            "OR_ASSIGN",
            "TYPEDEF_NAME",
            "ENUMERATION_CONSTANT",
            "TYPEDEF",
            "EXTERN",
            "STATIC",
            "AUTO",
            "REGISTER",
            "INLINE",
            "CONST",
            "RESTRICT",
            "VOLATILE",
            "BOOL",
            "CHAR",
            "SHORT",
            "INT",
            "LONG",
            "SIGNED",
            "UNSIGNED",
            "FLOAT",
            "DOUBLE",
            "VOID",
            "COMPLEX",
            "IMAGINARY",
            "STRUCT",
            "UNION",
            "ENUM",
            "ELLIPSIS",
            "CASE",
            "DEFAULT",
            "IF",
            "ELSE",
            "SWITCH",
            "WHILE",
            "DO",
            "FOR",
            "GOTO",
            "CONTINUE",
            "BREAK",
            "RETURN",
            "ALIGNAS",
            "ALIGNOF",
            "ATOMIC",
            "GENERIC",
            "NORETURN",
            "STATIC_ASSERT",
            "THREAD_LOCAL",
            "'('",
            "')'",
            "','",
            "':'",
            "'['",
            "']'",
            "'.'",
            "'{'",
            "'}'",
            "'&'",
            "'*'",
            "'+'",
            "'-'",
            "'!'",
            "'/'",
            "'%'",
            "'<'",
            "'>'",
            "'^'",
            "'|'",
            "'?'",
            "'='",
            "';'",
            "NOT_ASSIGN",
            "'~'"
        );

        $this->tokenToSymbol = array(
            0,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,   89,  101,  101,  101,   91,   85,  101,
            76,   77,   86,   87,   78,   88,   82,   90,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,   79,   98,
            92,   97,   93,   96,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,   80,  101,   81,   94,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,   83,   95,   84,  100,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,  101,  101,  101,  101,
            101,  101,  101,  101,  101,  101,    1,    2,    3,    4,
            5,    6,    7,    8,    9,   10,   11,   12,   13,   14,
            15,   16,   17,   18,   19,   20,   21,   22,   23,   24,
            25,   26,   27,   28,   29,   99,   30,   31,   32,   33,
            34,   35,   36,   37,   38,   39,   40,   41,   42,   43,
            44,   45,   46,   47,   48,   49,   50,   51,   52,   53,
            54,   55,   56,   57,   58,   59,   60,   61,   62,   63,
            64,   65,   66,   67,   68,   69,   70,   71,   72,   73,
            74,   75
        );

        $this->action = array(
            202,  265,  266,  269,  270,  112,  430,  113,  114,  100,
            101,  420,  421,  422,-32766,  115,    9,  481,    0,   39,
            34,  420,  421,  422,  183,  485,  119,  231,   84,  267,
            232,   50,  486,   84,  228,  232,   50,  285,  202,  265,
            266,  269,  270,  112,  423,  113,  114,   84,  182,  232,
            50,   93,  184,  115,  423,   80,  203,  204,  124,  205,
            206,   11,  207,  208,  209,  210,   65,  267,  186,  119,
            187,  128,  268,-32766,    4,   84,  483,  232,  399,  281,
            129,    1,  507,  296,  297,  298,  299,  300,  102,  103,
            119,  351,  492,   80,  203,  204,  513,  205,  206,   11,
            207,  208,  209,  210,   65,   52,  186,    8,  187,  457,
            280,   34,    4,   81,  198,  282,  283,-32766,  496,    1,
            508,  296,  297,  298,  299,  300,  109,  458,   72,  177,
            110,  111,  398,  388,  513,  367,  368,  369,  371,  372,
            424,  420,  421,  422,  382,  374,  375,  376,  377,  380,
            381,  378,  379,  373,  383,  384,  394,  395,  141,    1,
            260,  265,  266,  269,  270,  112,    9,  113,  114,   20,
            34,   94,  179,   63,  180,  115,  425,  181,  370,   40,
            245,-32766,   64,   27,  442,  284,   71,  430,  199,  267,
            -32766,-32766,-32766,-32766,-32766,-32766,  260,  265,  266,  269,
            270,  112,  137,  113,  114,  450,   24,-32766,  410,   15,
            33,  115,  337,  338,  339,  340,  341,  342,  343,  344,
            345,  346,   26,-32766,    3,  267,   35,-32766,  186,  138,
            187,-32766,-32766,-32766,    4,  412,    7,    8,  104,  105,
            202,   34,   57,  296,  297,  298,  299,  300,  260,  265,
            266,  269,  270,  112,   58,  113,  114,   98,   99,-32766,
            73,    8,  481,  115,  186,   34,  187,  443,  233,   74,
            4,  119,  279,   87,  271,   56,   75,  267,   76,  296,
            297,  298,  299,  300,   77,  106,  107,   79,    5,  336,
            6,   55,  513,   16,   17,   80,  203,  204,   21,  205,
            206,   11,  207,  208,  209,  210,   65,-32766,-32766,-32766,
            -32766,-32766,-32766,   22,   70,  433,  186,  237,  187,  200,
            238,    1,    4,-32766,-32766,-32766,-32766,-32766,-32766,  244,
            258,  296,  297,  298,  299,  300,  513,-32766,-32766,-32766,
            -32766,-32766,-32766,  426,-32766,  427,  419,  431,-32766,  249,
            -32766,-32766,-32766,-32766,-32766,-32766,-32766,  263,  441,  389,
            -32766,  295,  482,  464,-32766,-32766,-32766,-32766,-32766,-32766,
            -32766,-32766,-32766,  484,-32766,   18,   19,  278,-32766,   82,
            -32766,-32766,-32766,-32766,-32766,-32766,-32766,   12,-32766,  390,
            13,   41,-32766,   14,-32766,  420,  421,  422,  440,   86,
            90,   91,   92,  392,-32766,   81,  466,   42,-32766,-32766,
            -32766,  420,  421,  422,  472,   43,  411,  435,-32766,  420,
            421,  422,-32766,  436,-32766,  438,   85,  468,  423,   88,
            420,  421,  422,  420,  421,  422,  470,  474,  432,  480,
            495,  434,   89,  213,  423,  437,  420,  421,  422,  467,
            469,  476,  423,  477,  465,  475,  478,  277,   95,  226,
            51,   53,  473,  423,  413,   54,  423,  242,  178,    1,
            50,    0,    0,  439,   97,    0,  471,  119,  235,  423,
            -32766,   63,   96,    0,    0,    0,    0,   78,    0,  479,
            0,  525,    0,    0,  526,  524,  497,  519,  514,  528,
            350,  513,  527
        );

        $this->actionCheck = array(
            2,    3,    4,    5,    6,    7,    2,    9,   10,   13,
            14,   38,   39,   40,   74,   17,   76,   77,    0,   78,
            80,   38,   39,   40,    2,   84,   86,    2,   80,   31,
            82,   83,   84,   80,    5,   82,   83,   84,    2,    3,
            4,    5,    6,    7,   71,    9,   10,   80,    2,   82,
            83,   19,   30,   17,   71,   57,   58,   59,   78,   61,
            62,   63,   64,   65,   66,   67,   68,   31,   70,   86,
            72,   78,    2,   74,   76,   80,   77,   82,   98,    2,
            76,   83,   84,   85,   86,   87,   88,   89,   92,   93,
            86,   98,   97,   57,   58,   59,   98,   61,   62,   63,
            64,   65,   66,   67,   68,   83,   70,   76,   72,    2,
            2,   80,   76,   79,    8,    9,   10,   86,    2,   83,
            84,   85,   86,   87,   88,   89,   86,    2,   96,   83,
            90,   91,   98,   30,   98,   32,   33,   34,   35,   36,
            37,   38,   39,   40,   41,   42,   43,   44,   45,   46,
            47,   48,   49,   50,   51,   52,   53,   54,   55,   83,
            2,    3,    4,    5,    6,    7,   76,    9,   10,   60,
            80,   18,   69,   97,   71,   17,   73,   74,   75,   78,
            62,   74,   76,   78,   77,   84,   80,    2,   82,   31,
            32,   33,   34,   35,   36,   37,    2,    3,    4,    5,
            6,    7,   78,    9,   10,   56,   76,   74,   84,   77,
            80,   17,   20,   21,   22,   23,   24,   25,   26,   27,
            28,   29,   76,   74,   76,   31,   80,   69,   70,   78,
            72,   73,   74,   75,   76,   84,   76,   76,   11,   12,
            2,   80,   76,   85,   86,   87,   88,   89,    2,    3,
            4,    5,    6,    7,   76,    9,   10,   15,   16,   74,
            76,   76,   77,   17,   70,   80,   72,   77,   78,   76,
            76,   86,   77,   78,   77,   78,   76,   31,   76,   85,
            86,   87,   88,   89,   76,   87,   88,   76,   76,   97,
            76,   78,   98,   77,   77,   57,   58,   59,   77,   61,
            62,   63,   64,   65,   66,   67,   68,   32,   33,   34,
            35,   36,   37,   77,   77,   81,   70,   77,   72,   78,
            77,   83,   76,   32,   33,   34,   35,   36,   37,   77,
            77,   85,   86,   87,   88,   89,   98,   32,   33,   34,
            35,   36,   37,   77,   69,   77,   77,   77,   73,   58,
            75,   32,   33,   34,   35,   36,   37,   77,   77,   84,
            69,   77,   77,   77,   73,   74,   75,   32,   33,   34,
            35,   36,   37,   77,   69,   77,   77,   77,   73,   78,
            75,   32,   33,   34,   35,   36,   37,   79,   69,   84,
            79,   34,   73,   79,   75,   38,   39,   40,   81,   79,
            79,   79,   79,   84,   69,   79,   81,   34,   73,   74,
            75,   38,   39,   40,   81,   34,   84,   81,   69,   38,
            39,   40,   73,   81,   75,   81,   34,   81,   71,   34,
            38,   39,   40,   38,   39,   40,   81,   81,   81,   81,
            81,   81,   34,   86,   71,   81,   38,   39,   40,   81,
            81,   81,   71,   81,   81,   81,   81,   81,   95,   86,
            83,   83,   81,   71,   84,   83,   71,   86,   83,   83,
            83,   -1,   -1,   81,   85,   -1,   81,   86,   86,   71,
            86,   97,   94,   -1,   -1,   -1,   -1,   97,   -1,   81,
            -1,   98,   -1,   -1,   98,   98,   98,   98,   98,   98,
            98,   98,   98
        );

        $this->actionBase = array(
            103,   -2,   36,  194,  158,  158,  158,  158,  185,  -60,
            76,  238,  238,  238,  238,  238,  238,  238,  238,  238,
            238,  238,  238,   18,  107,  386,   -1,  149,  133,  133,
            133,  133,  133,  357,  373,  381,  392,  395,  408,  -52,
            -47,  -27,  -27,  -27,  -27,  -27,  -27,  275,  305,  319,
            -33,  -33,  349,  349,  349,  291,  291,  335,  335,  335,
            335,  403,  403,  387,  300,  404,  387,  298,  299,  387,
            377,  246,  246,  246,  246,  246,  246,  246,  246,  246,
            246,  246,  246,  246,  246,  246,  246,  246,  246,  246,
            246,  246,  246,  246,  246,  246,  246,  246,  246,  246,
            246,  246,  246,  246,  246,  246,  246,  246,  246,  246,
            246,  246,  212,  214,  214,  214,  192,  106,   34,  -17,
            -17,  402,  402,  161,  326,   -4,   -4,   -4,    4,    4,
            391,   31,   -5,   22,   40,   40,   40,  332,  380,  394,
            90,   46,   -7,  130,  124,  198,  227,  242,   32,  130,
            151,  280,  146,  400,  190,  -20,  195,  376,  198,  198,
            227,  227,  227,  227,  242,  323,  146,  401,  -59,  132,
            216,  217,  197,  101,  253,  221,  236,   70,   70,  160,
            166,  208,  385,  378,  382,  390,  178,  211,  266,  389,
            388,  363,  153,  268,  269,  241,  270,  237,   77,  108,
            29,  384,  308,  311,  184,  193,  200,  148,   25,  393,
            396,  281,  105,  234,  317,  320,  240,  243,  284,  213,
            389,  388,  363,  153,  285,  286,  325,  333,  252,  314,
            118,  397,  116,  125,  336,  342,  344,  377,  377,  346,
            355,  296,  356,  358,  398,  202,  359,  360,  364,  321,
            322,  368,  369,  370,  372,  374,  375,  109,  399,    0,
            103,  103,  103,  103,  103,  103,  103,  103,  103,  103,
            246,  246,  246,  246,  246,  246,  246,  246,  246,  246,
            246,  246,  103,  103,  103,  103,  103,  103,  103,  103,
            103,  103,  246,  246,  246,  246,  246,  246,  246,  246,
            246,  246,  246,  246,  246,  246,  103,  103,  103,  246,
            246,  103,  103,  103,  103,  103,  103,  103,  103,  103,
            246,  246,  246,  246,  246,  246,  246,  246,  246,  246,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,  246,  246,  246,  246,    0,    0,    4,    0,    0,
            4,    4,    4,    4,    0,    0,    0,    0,    0,   90,
            4,    0,    0,    0,    0,    0,   70,   70,    4,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            301,    0,  301,    0,    0,    0,  301,    0,    0,    0,
            0,    0,    0,    0,  301,    0,  301,    0,  301,  301,
            301,    0,    0,  301,  301,  301
        );

        $this->actionDefault = array(
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            107,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,   95,   97,
            99,  101,  103,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,  143,
            145,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,   43,   29,32767,  188,
            186,32767,32767,  197,32767,   60,   61,   62,32767,32767,
            201,  203,32767,32767,   49,   50,   51,32767,32767,32767,
            203,32767,32767,  170,32767,   52,   55,   63,   73,  169,
            32767,32767,  204,32767,32767,32767,32767,32767,   53,   54,
            58,   59,   56,   57,   64,32767,  202,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
            164,32767,  155,  132,  134,  159,32767,32767,32767,   65,
            67,   69,   71,32767,32767,32767,32767,32767,32767,32767,
            32767,  107,    1,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,  192,   38,32767,  150,32767,32767,32767,32767,
            66,   68,   70,   72,32767,32767,   38,32767,32767,32767,
            32767,32767,32767,32767,32767,   38,32767,   35,32767,32767,
            32767,32767,   38,32767,32767,32767,32767,32767,32767,32767,
            32767,32767,32767,32767,32767,32767,32767,  257,32767
        );

        $this->goto = array(
            302,   60,   60,   60,   60,  230,  504,  506,  505,  257,
            517,  518,  522,  520,  515,  523,  521,  160,  161,  162,
            163,  534,  197,  216,  217,  188,  396,  396,  396,  149,
            448,  448,  448,  449,  449,  449,  533,  149,  448,  448,
            448,  449,  449,  449,   60,   60,   60,  131,  140,   60,
            60,   60,   60,   60,   60,   60,   60,   60,   66,   66,
            37,   38,  211,  302,  241,  489,  489,   44,   45,   46,
            302,  302,  303,  302,  302,  194,  218,  302,  365,  302,
            510,  488,   48,   49,  490,  302,  302,  302,  302,  302,
            302,  302,  302,  302,  302,  302,  302,  302,  302,  302,
            302,  302,  302,  302,  302,  293,  289,  290,  291,  530,
            292,  305,  306,  307,  126,  127,  448,  449,  214,  227,
            243,  236,  240,  254,  487,  487,  234,  239,  253,  247,
            251,  255,  158,  159,  453,  487,  487,   59,   59,   59,
            59,  151,  151,  151,  196,  120,  455,  173,  487,  286,
            273,  487,  222,  459,  487,  223,   62,  220,  446,  444,
            221,  349,  131,  164,  219,  135,  136,  348,  335,  140,
            248,  406,  287,  252,  256,  275,  274,  364,  415,  415,
            59,   59,   59,  494,  150,   59,   59,   59,   59,   59,
            59,   59,   59,   59,  400,  400,  400,    0,  121,  400,
            400,  400,  167,    0,  175,  176,  123,  123,  157,  165,
            169,  170,  171,  174,   67,   68,    0,    0,    0,    0,
            0,  121,  123,    0,  123,  123,  353,  355,  357,  359,
            361,  349,  349,    0,  349,  349,  166,    0,  349,    0,
            349,    0,  118,  118,  118,  166,  333,  118,  118,  118,
            0,    0,    0,  532,  401,  403,   61,   10,  201,  454,
            0,    0,    0,  535,  201,  196,  195,  417,    0,  229,
            407,    0,    0,  246,    0,  408,  532,    0,  536
        );

        $this->gotoCheck = array(
            15,   38,   38,   38,   38,   67,   67,   67,   67,   67,
            67,   67,   67,   67,   67,   67,   67,   21,   21,   21,
            21,   69,   11,   11,   11,   11,   49,   49,   49,   56,
            38,   38,   38,   38,   38,   38,   69,   56,   38,   38,
            38,   38,   38,   38,   38,   38,   38,   55,   55,   38,
            38,   38,   38,   38,   38,   38,   38,   38,   64,   64,
            57,   57,   58,   15,   58,   43,   43,   57,   57,   57,
            15,   15,   17,   15,   15,   11,   11,   15,   43,   15,
            75,   43,   48,   48,   43,   15,   15,   15,   15,   15,
            15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
            15,   15,   15,   15,   15,   15,   15,   15,   15,   76,
            17,   17,   17,   17,   22,   22,   38,   38,    8,    8,
            8,    8,    8,    8,    8,    8,    8,    8,    8,    8,
            8,    8,   20,   20,   61,    8,    8,   37,   37,   37,
            37,    5,    5,    5,   42,   57,   62,   14,    8,    8,
            10,    8,   26,   62,    8,   27,   70,   24,   55,   55,
            25,   29,   55,   23,    8,   19,   19,    8,    8,   55,
            8,   52,    8,    8,    8,    8,    8,   41,   54,   54,
            37,   37,   37,   66,   53,   37,   37,   37,   37,   37,
            37,   37,   37,   37,   35,   35,   35,   -1,   33,   35,
            35,   35,    5,   -1,    5,    5,   33,   33,    5,    5,
            5,    5,    5,    5,   70,   70,   -1,   -1,   -1,   -1,
            -1,   33,   33,   -1,   33,   33,   33,   33,   33,   33,
            33,   29,   29,   -1,   29,   29,   63,   -1,   29,   -1,
            29,   -1,   50,   50,   50,   63,   29,   50,   50,   50,
            -1,   -1,   -1,   32,   50,   50,   32,   42,   42,   42,
            -1,   -1,   -1,   32,   42,   42,   31,   31,   -1,   31,
            31,   -1,   -1,   31,   -1,   31,   32,   -1,   32
        );

        $this->gotoBase = array(
            0,    0,    0,    0,    0,  137,    0,    0,   85,    0,
            94,   18,    0,    0,   96,   -7,    0,    2,    0,   59,
            28,  -83,   16,   66,   61,   65,   58,   62,    0,  154,
            0,  189,  253,  198,    0,  147,    0,  133,   -3,    0,
            0,   49,  136,   15,    0,    0,    0,    0,   29,  -26,
            195,    0,   47,    6,    1,   39, -102,   26,   38,    0,
            0,  107,   23,  105,    8,    0,   51,   -6,    0,   11,
            153,    0,    0,    0,    0,   78,   86,    0,    0
        );

        $this->gotoDefault = array(
            -32768,   23,  276,  261,  262,  153,  264,  185,  347,  172,
            272,  250,  117,  156,  168,  116,  108,  304,-32768,  134,
            145,  146,  125,  147,  189,  190,  191,  192,  148,  334,
            83,  193,  511,  122,  142,  352,   28,   29,   30,   31,
            32,  363,  215,  491,  385,  386,  387,  133,   47,  397,
            130,  155,  405,  144,  416,  139,  143,   36,  224,  154,
            212,  452,  225,  152,   69,  132,  493,  512,  498,  499,
            500,  501,  502,  503,    2,  509,  529,  531,   25
        );

        $this->ruleToNonTerminal = array(
            0,    2,    2,    2,    2,    2,    3,    3,    3,    7,
            4,    4,    6,    9,    9,   10,   10,   12,   12,   12,
            12,   12,   12,   12,   12,   12,   12,   13,   13,   15,
            15,   15,   15,   15,   15,   15,   15,   16,   16,   16,
            16,   16,   18,   17,   17,   19,   19,   19,   19,   20,
            20,   20,   21,   21,   21,   22,   22,   22,   22,   22,
            23,   23,   23,   24,   24,   25,   25,   26,   26,   27,
            27,   28,   28,   29,   29,    8,    8,   30,   30,   30,
            30,   30,   30,   30,   30,   30,   30,   30,    5,    5,
            31,   32,   32,   32,   33,   33,   33,   33,   33,   33,
            33,   33,   33,   33,   34,   34,   41,   41,   36,   36,
            36,   36,   36,   36,   37,   37,   37,   37,   37,   37,
            37,   37,   37,   37,   37,   37,   37,   37,   37,   37,
            45,   45,   45,   45,   45,   47,   47,   48,   48,   49,
            49,   49,   50,   50,   50,   50,   51,   51,   52,   52,
            52,   46,   46,   46,   46,   46,   53,   53,   54,   54,
            44,   38,   38,   38,   38,   39,   39,   40,   40,   42,
            42,   56,   56,   56,   56,   56,   56,   56,   56,   56,
            56,   56,   56,   56,   56,   55,   55,   55,   55,   57,
            57,   58,   58,   60,   60,   61,   61,   61,   59,   59,
            11,   11,   62,   62,   62,   63,   63,   63,   63,   63,
            63,   63,   63,   63,   63,   63,   63,   63,   63,   63,
            63,   63,   63,   63,   63,   63,   43,   43,   43,   14,
            14,   14,   14,   64,   65,   65,   66,   66,   35,   67,
            67,   67,   67,   67,   67,   68,   68,   68,   69,   69,
            74,   74,   75,   75,   70,   70,   71,   71,   71,   72,
            72,   72,   72,   72,   72,   73,   73,   73,   73,   73,
            1,    1,   76,   76,   77,   77,   78,   78
        );

        $this->ruleToLength = array(
            1,    1,    1,    1,    3,    1,    1,    1,    1,    1,
            1,    1,    6,    1,    3,    3,    3,    1,    4,    3,
            4,    3,    3,    2,    2,    6,    7,    1,    3,    1,
            2,    2,    2,    2,    2,    4,    4,    1,    1,    1,
            1,    1,    1,    1,    4,    1,    3,    3,    3,    1,
            3,    3,    1,    3,    3,    1,    3,    3,    3,    3,
            1,    3,    3,    1,    3,    1,    3,    1,    3,    1,
            3,    1,    3,    1,    5,    1,    3,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    3,
            1,    2,    3,    1,    2,    1,    2,    1,    2,    1,
            2,    1,    2,    1,    1,    3,    3,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            4,    5,    2,    5,    2,    1,    1,    1,    2,    2,
            3,    1,    2,    1,    2,    1,    1,    3,    2,    3,
            1,    4,    5,    5,    6,    2,    1,    3,    3,    1,
            4,    1,    1,    1,    1,    1,    1,    4,    4,    2,
            1,    1,    3,    3,    4,    6,    5,    5,    6,    5,
            4,    4,    4,    3,    4,    3,    2,    2,    1,    1,
            2,    3,    1,    1,    3,    2,    2,    1,    1,    3,
            2,    1,    2,    1,    1,    3,    2,    3,    5,    4,
            5,    4,    3,    3,    3,    4,    6,    5,    5,    6,
            4,    4,    2,    3,    3,    4,    3,    4,    1,    2,
            1,    4,    3,    2,    1,    2,    3,    2,    7,    1,
            1,    1,    1,    1,    1,    3,    4,    3,    2,    3,
            1,    2,    1,    1,    1,    2,    7,    5,    5,    5,
            7,    6,    7,    6,    7,    3,    2,    2,    2,    3,
            1,    2,    1,    1,    4,    3,    1,    2
        );

        $this->productions = array(
            "\$start : translation_unit",
            "primary_expression : IDENTIFIER",
            "primary_expression : constant",
            "primary_expression : string",
            "primary_expression : '(' expression ')'",
            "primary_expression : generic_selection",
            "constant : I_CONSTANT",
            "constant : F_CONSTANT",
            "constant : ENUMERATION_CONSTANT",
            "enumeration_constant : IDENTIFIER",
            "string : STRING_LITERAL",
            "string : FUNC_NAME",
            "generic_selection : GENERIC '(' assignment_expression ',' generic_assoc_list ')'",
            "generic_assoc_list : generic_association",
            "generic_assoc_list : generic_assoc_list ',' generic_association",
            "generic_association : type_name ':' assignment_expression",
            "generic_association : DEFAULT ':' assignment_expression",
            "postfix_expression : primary_expression",
            "postfix_expression : postfix_expression '[' expression ']'",
            "postfix_expression : postfix_expression '(' ')'",
            "postfix_expression : postfix_expression '(' argument_expression_list ')'",
            "postfix_expression : postfix_expression '.' IDENTIFIER",
            "postfix_expression : postfix_expression PTR_OP IDENTIFIER",
            "postfix_expression : postfix_expression INC_OP",
            "postfix_expression : postfix_expression DEC_OP",
            "postfix_expression : '(' type_name ')' '{' initializer_list '}'",
            "postfix_expression : '(' type_name ')' '{' initializer_list ',' '}'",
            "argument_expression_list : assignment_expression",
            "argument_expression_list : argument_expression_list ',' assignment_expression",
            "unary_expression : postfix_expression",
            "unary_expression : INC_OP unary_expression",
            "unary_expression : DEC_OP unary_expression",
            "unary_expression : NOT_OP unary_expression",
            "unary_expression : unary_operator cast_expression",
            "unary_expression : SIZEOF unary_expression",
            "unary_expression : SIZEOF '(' type_name ')'",
            "unary_expression : ALIGNOF '(' type_name ')'",
            "unary_operator : '&'",
            "unary_operator : '*'",
            "unary_operator : '+'",
            "unary_operator : '-'",
            "unary_operator : '!'",
            "bitwise_operator : '~'",
            "cast_expression : unary_expression",
            "cast_expression : '(' type_name ')' cast_expression",
            "multiplicative_expression : cast_expression",
            "multiplicative_expression : multiplicative_expression '*' cast_expression",
            "multiplicative_expression : multiplicative_expression '/' cast_expression",
            "multiplicative_expression : multiplicative_expression '%' cast_expression",
            "additive_expression : multiplicative_expression",
            "additive_expression : additive_expression '+' multiplicative_expression",
            "additive_expression : additive_expression '-' multiplicative_expression",
            "shift_expression : additive_expression",
            "shift_expression : shift_expression LEFT_OP additive_expression",
            "shift_expression : shift_expression RIGHT_OP additive_expression",
            "relational_expression : shift_expression",
            "relational_expression : relational_expression '<' shift_expression",
            "relational_expression : relational_expression '>' shift_expression",
            "relational_expression : relational_expression LE_OP shift_expression",
            "relational_expression : relational_expression GE_OP shift_expression",
            "equality_expression : relational_expression",
            "equality_expression : equality_expression EQ_OP relational_expression",
            "equality_expression : equality_expression NE_OP relational_expression",
            "and_expression : equality_expression",
            "and_expression : and_expression '&' equality_expression",
            "exclusive_or_expression : and_expression",
            "exclusive_or_expression : exclusive_or_expression '^' and_expression",
            "inclusive_or_expression : exclusive_or_expression",
            "inclusive_or_expression : inclusive_or_expression '|' exclusive_or_expression",
            "logical_and_expression : inclusive_or_expression",
            "logical_and_expression : logical_and_expression AND_OP inclusive_or_expression",
            "logical_or_expression : logical_and_expression",
            "logical_or_expression : logical_or_expression OR_OP logical_and_expression",
            "conditional_expression : logical_or_expression",
            "conditional_expression : logical_or_expression '?' expression ':' conditional_expression",
            "assignment_expression : conditional_expression",
            "assignment_expression : unary_expression assignment_operator assignment_expression",
            "assignment_operator : '='",
            "assignment_operator : MUL_ASSIGN",
            "assignment_operator : DIV_ASSIGN",
            "assignment_operator : MOD_ASSIGN",
            "assignment_operator : ADD_ASSIGN",
            "assignment_operator : SUB_ASSIGN",
            "assignment_operator : LEFT_ASSIGN",
            "assignment_operator : RIGHT_ASSIGN",
            "assignment_operator : AND_ASSIGN",
            "assignment_operator : XOR_ASSIGN",
            "assignment_operator : OR_ASSIGN",
            "expression : assignment_expression",
            "expression : expression ',' assignment_expression",
            "constant_expression : conditional_expression",
            "declaration : declaration_specifiers ';'",
            "declaration : declaration_specifiers init_declarator_list ';'",
            "declaration : static_assert_declaration",
            "declaration_specifiers : storage_class_specifier declaration_specifiers",
            "declaration_specifiers : storage_class_specifier",
            "declaration_specifiers : type_specifier declaration_specifiers",
            "declaration_specifiers : type_specifier",
            "declaration_specifiers : type_qualifier declaration_specifiers",
            "declaration_specifiers : type_qualifier",
            "declaration_specifiers : function_specifier declaration_specifiers",
            "declaration_specifiers : function_specifier",
            "declaration_specifiers : alignment_specifier declaration_specifiers",
            "declaration_specifiers : alignment_specifier",
            "init_declarator_list : init_declarator",
            "init_declarator_list : init_declarator_list ',' init_declarator",
            "init_declarator : declarator '=' initializer",
            "init_declarator : declarator",
            "storage_class_specifier : TYPEDEF",
            "storage_class_specifier : EXTERN",
            "storage_class_specifier : STATIC",
            "storage_class_specifier : THREAD_LOCAL",
            "storage_class_specifier : AUTO",
            "storage_class_specifier : REGISTER",
            "type_specifier : VOID",
            "type_specifier : CHAR",
            "type_specifier : SHORT",
            "type_specifier : INT",
            "type_specifier : LONG",
            "type_specifier : FLOAT",
            "type_specifier : DOUBLE",
            "type_specifier : SIGNED",
            "type_specifier : UNSIGNED",
            "type_specifier : BOOL",
            "type_specifier : COMPLEX",
            "type_specifier : IMAGINARY",
            "type_specifier : atomic_type_specifier",
            "type_specifier : struct_or_union_specifier",
            "type_specifier : enum_specifier",
            "type_specifier : TYPEDEF_NAME",
            "struct_or_union_specifier : struct_or_union '{' struct_declaration_list '}'",
            "struct_or_union_specifier : struct_or_union IDENTIFIER '{' struct_declaration_list '}'",
            "struct_or_union_specifier : struct_or_union IDENTIFIER",
            "struct_or_union_specifier : struct_or_union TYPEDEF_NAME '{' struct_declaration_list '}'",
            "struct_or_union_specifier : struct_or_union TYPEDEF_NAME",
            "struct_or_union : STRUCT",
            "struct_or_union : UNION",
            "struct_declaration_list : struct_declaration",
            "struct_declaration_list : struct_declaration_list struct_declaration",
            "struct_declaration : specifier_qualifier_list ';'",
            "struct_declaration : specifier_qualifier_list struct_declarator_list ';'",
            "struct_declaration : static_assert_declaration",
            "specifier_qualifier_list : type_specifier specifier_qualifier_list",
            "specifier_qualifier_list : type_specifier",
            "specifier_qualifier_list : type_qualifier specifier_qualifier_list",
            "specifier_qualifier_list : type_qualifier",
            "struct_declarator_list : struct_declarator",
            "struct_declarator_list : struct_declarator_list ',' struct_declarator",
            "struct_declarator : ':' constant_expression",
            "struct_declarator : declarator ':' constant_expression",
            "struct_declarator : declarator",
            "enum_specifier : ENUM '{' enumerator_list '}'",
            "enum_specifier : ENUM '{' enumerator_list ',' '}'",
            "enum_specifier : ENUM IDENTIFIER '{' enumerator_list '}'",
            "enum_specifier : ENUM IDENTIFIER '{' enumerator_list ',' '}'",
            "enum_specifier : ENUM IDENTIFIER",
            "enumerator_list : enumerator",
            "enumerator_list : enumerator_list ',' enumerator",
            "enumerator : enumeration_constant '=' constant_expression",
            "enumerator : enumeration_constant",
            "atomic_type_specifier : ATOMIC '(' type_name ')'",
            "type_qualifier : CONST",
            "type_qualifier : RESTRICT",
            "type_qualifier : VOLATILE",
            "type_qualifier : ATOMIC",
            "function_specifier : INLINE",
            "function_specifier : NORETURN",
            "alignment_specifier : ALIGNAS '(' type_name ')'",
            "alignment_specifier : ALIGNAS '(' constant_expression ')'",
            "declarator : pointer direct_declarator",
            "declarator : direct_declarator",
            "direct_declarator : IDENTIFIER",
            "direct_declarator : '(' declarator ')'",
            "direct_declarator : direct_declarator '[' ']'",
            "direct_declarator : direct_declarator '[' '*' ']'",
            "direct_declarator : direct_declarator '[' STATIC type_qualifier_list assignment_expression ']'",
            "direct_declarator : direct_declarator '[' STATIC assignment_expression ']'",
            "direct_declarator : direct_declarator '[' type_qualifier_list '*' ']'",
            "direct_declarator : direct_declarator '[' type_qualifier_list STATIC assignment_expression ']'",
            "direct_declarator : direct_declarator '[' type_qualifier_list assignment_expression ']'",
            "direct_declarator : direct_declarator '[' type_qualifier_list ']'",
            "direct_declarator : direct_declarator '[' assignment_expression ']'",
            "direct_declarator : direct_declarator '(' parameter_type_list ')'",
            "direct_declarator : direct_declarator '(' ')'",
            "direct_declarator : direct_declarator '(' identifier_list ')'",
            "pointer : '*' type_qualifier_list pointer",
            "pointer : '*' type_qualifier_list",
            "pointer : '*' pointer",
            "pointer : '*'",
            "type_qualifier_list : type_qualifier",
            "type_qualifier_list : type_qualifier_list type_qualifier",
            "parameter_type_list : parameter_list ',' ELLIPSIS",
            "parameter_type_list : parameter_list",
            "parameter_list : parameter_declaration",
            "parameter_list : parameter_list ',' parameter_declaration",
            "parameter_declaration : declaration_specifiers declarator",
            "parameter_declaration : declaration_specifiers abstract_declarator",
            "parameter_declaration : declaration_specifiers",
            "identifier_list : IDENTIFIER",
            "identifier_list : identifier_list ',' IDENTIFIER",
            "type_name : specifier_qualifier_list abstract_declarator",
            "type_name : specifier_qualifier_list",
            "abstract_declarator : pointer direct_abstract_declarator",
            "abstract_declarator : pointer",
            "abstract_declarator : direct_abstract_declarator",
            "direct_abstract_declarator : '(' abstract_declarator ')'",
            "direct_abstract_declarator : '[' ']'",
            "direct_abstract_declarator : '[' '*' ']'",
            "direct_abstract_declarator : '[' STATIC type_qualifier_list assignment_expression ']'",
            "direct_abstract_declarator : '[' STATIC assignment_expression ']'",
            "direct_abstract_declarator : '[' type_qualifier_list STATIC assignment_expression ']'",
            "direct_abstract_declarator : '[' type_qualifier_list assignment_expression ']'",
            "direct_abstract_declarator : '[' type_qualifier_list ']'",
            "direct_abstract_declarator : '[' assignment_expression ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' '*' ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' STATIC type_qualifier_list assignment_expression ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' STATIC assignment_expression ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' type_qualifier_list assignment_expression ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' type_qualifier_list STATIC assignment_expression ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' type_qualifier_list ']'",
            "direct_abstract_declarator : direct_abstract_declarator '[' assignment_expression ']'",
            "direct_abstract_declarator : '(' ')'",
            "direct_abstract_declarator : '(' parameter_type_list ')'",
            "direct_abstract_declarator : direct_abstract_declarator '(' ')'",
            "direct_abstract_declarator : direct_abstract_declarator '(' parameter_type_list ')'",
            "initializer : '{' initializer_list '}'",
            "initializer : '{' initializer_list ',' '}'",
            "initializer : assignment_expression",
            "initializer_list : designation initializer",
            "initializer_list : initializer",
            "initializer_list : initializer_list ',' designation initializer",
            "initializer_list : initializer_list ',' initializer",
            "designation : designator_list '='",
            "designator_list : designator",
            "designator_list : designator_list designator",
            "designator : '[' constant_expression ']'",
            "designator : '.' IDENTIFIER",
            "static_assert_declaration : STATIC_ASSERT '(' constant_expression ',' STRING_LITERAL ')' ';'",
            "statement : labeled_statement",
            "statement : compound_statement",
            "statement : expression_statement",
            "statement : selection_statement",
            "statement : iteration_statement",
            "statement : jump_statement",
            "labeled_statement : IDENTIFIER ':' statement",
            "labeled_statement : CASE constant_expression ':' statement",
            "labeled_statement : DEFAULT ':' statement",
            "compound_statement : '{' '}'",
            "compound_statement : '{' block_item_list '}'",
            "block_item_list : block_item",
            "block_item_list : block_item_list block_item",
            "block_item : declaration",
            "block_item : statement",
            "expression_statement : ';'",
            "expression_statement : expression ';'",
            "selection_statement : IF '(' expression ')' statement ELSE statement",
            "selection_statement : IF '(' expression ')' statement",
            "selection_statement : SWITCH '(' expression ')' statement",
            "iteration_statement : WHILE '(' expression ')' statement",
            "iteration_statement : DO statement WHILE '(' expression ')' ';'",
            "iteration_statement : FOR '(' expression_statement expression_statement ')' statement",
            "iteration_statement : FOR '(' expression_statement expression_statement expression ')' statement",
            "iteration_statement : FOR '(' declaration expression_statement ')' statement",
            "iteration_statement : FOR '(' declaration expression_statement expression ')' statement",
            "jump_statement : GOTO IDENTIFIER ';'",
            "jump_statement : CONTINUE ';'",
            "jump_statement : BREAK ';'",
            "jump_statement : RETURN ';'",
            "jump_statement : RETURN expression ';'",
            "translation_unit : external_declaration",
            "translation_unit : translation_unit external_declaration",
            "external_declaration : function_definition",
            "external_declaration : declaration",
            "function_definition : declaration_specifiers declarator declaration_list compound_statement",
            "function_definition : declaration_specifiers declarator compound_statement",
            "declaration_list : declaration",
            "declaration_list : declaration_list declaration"
        );

    }
    protected function initReduceCallbacks() {
        $this->reduceCallbacks = [
            0 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos];
            },
            1 => function ($stackPos) {
                $this->semValue = new Expr\DeclRefExpr($this->semStack[$stackPos-(1-1)], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            2 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            3 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            4 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(3-2)];
            },
            5 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            6 => function ($stackPos) {
                $this->semValue = new Node\Stmt\ValueStmt\Expr\IntegerLiteral($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            7 => function ($stackPos) {
                $this->semValue = new Node\Stmt\ValueStmt\Expr\FloatLiteral($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            8 => function ($stackPos) {
                $this->semValue = new Node\Stmt\ValueStmt\Expr\DeclRefExpr($this->semStack[$stackPos-(1-1)], $this->scope->enum($this->semStack[$stackPos-(1-1)]), $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            9 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            10 => function ($stackPos) {
                $this->semValue = new Node\Stmt\ValueStmt\Expr\IntegerLiteral($this->semStack[$stackPos-(1-1)]); /*throw new Error('string_literal not implemented');*/
            },
            11 => function ($stackPos) {
                throw new Error('func name not implemented');
            },
            12 => function ($stackPos) {
                throw new Error('generic not implemented');
            },
            13 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            14 => function ($stackPos) {
                $this->semStack[$stackPos-(3-1)][] = $this->semStack[$stackPos-(3-3)]; $this->semValue = $this->semStack[$stackPos-(3-1)];
            },
            15 => function ($stackPos) {
                throw new Error('generic association typename not implemented');
            },
            16 => function ($stackPos) {
                throw new Error('generic association default not implemented');
            },
            17 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            18 => function ($stackPos) {
                throw new Error('dim fetch not implemented');
            },
            19 => function ($stackPos) {
                $this->semValue = new Expr\CallExpr($this->semStack[$stackPos-(3-1)], [], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            20 => function ($stackPos) {
                $this->semValue = new Expr\CallExpr($this->semStack[$stackPos-(4-1)], $this->semStack[$stackPos-(4-3)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            21 => function ($stackPos) {
                throw new Error('.identifier not implemented');
            },
            22 => function ($stackPos) {
                throw new Error('->identifier not implemented');
            },
            23 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], Expr\UnaryOperator::KIND_POSTINC, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            24 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], Expr\UnaryOperator::KIND_POSTDEC, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            25 => function ($stackPos) {
                throw new Error('initializer list no trailing not implemented');
            },
            26 => function ($stackPos) {
                throw new Error('initializer list trailing not implemented');
            },
            27 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            28 => function ($stackPos) {
                $this->semStack[$stackPos-(3-1)][] = $this->semStack[$stackPos-(3-3)]; $this->semValue = $this->semStack[$stackPos-(3-1)];
            },
            29 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            30 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], Expr\UnaryOperator::KIND_PREINC, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            31 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], Expr\UnaryOperator::KIND_PREDEC, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            32 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], Expr\UnaryOperator::KIND_BITWISE_NOT, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            33 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], $this->semStack[$stackPos-(2-1)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            34 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(2-2)], Expr\UnaryOperator::KIND_SIZEOF, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            35 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(4-3)], Expr\UnaryOperator::KIND_SIZEOF, $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            36 => function ($stackPos) {
                $this->semValue = new Expr\UnaryOperator($this->semStack[$stackPos-(4-3)], Expr\UnaryOperator::KIND_ALIGNOF, $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            37 => function ($stackPos) {
                $this->semValue = Expr\UnaryOperator::KIND_ADDRESS_OF;
            },
            38 => function ($stackPos) {
                $this->semValue = Expr\UnaryOperator::KIND_DEREF;
            },
            39 => function ($stackPos) {
                $this->semValue = Expr\UnaryOperator::KIND_PLUS;
            },
            40 => function ($stackPos) {
                $this->semValue = Expr\UnaryOperator::KIND_MINUS;
            },
            41 => function ($stackPos) {
                $this->semValue = Expr\UnaryOperator::KIND_LOGICAL_NOT;
            },
            42 => function ($stackPos) {
                $this->semValue = Expr\UnaryOperator::KIND_BITWISE_NOT;
            },
            43 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            44 => function ($stackPos) {
                $this->semValue = new Expr\CastExpr($this->semStack[$stackPos-(4-4)], $this->semStack[$stackPos-(4-2)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            45 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            46 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_MUL, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            47 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_DIV, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            48 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_REM, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            49 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            50 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_ADD, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            51 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_SUB, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            52 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            53 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_SHL, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            54 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_SHR, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            55 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            56 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_LT, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            57 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_GT, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            58 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_LE, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            59 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_GE, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            60 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            61 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_EQ, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            62 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_NE, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            63 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            64 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_BITWISE_AND, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            65 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            66 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_BITWISE_XOR, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            67 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            68 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_BITWISE_OR, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            69 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            70 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_LOGICAL_AND, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            71 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            72 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_LOGICAL_OR, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            73 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            74 => function ($stackPos) {
                $this->semValue = new Expr\AbstractConditionalOperator\ConditionalOperator($this->semStack[$stackPos-(5-1)], $this->semStack[$stackPos-(5-3)], $this->semStack[$stackPos-(5-5)], $this->startAttributeStack[$stackPos-(5-1)] + $this->endAttributes);
            },
            75 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            76 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], $this->semStack[$stackPos-(3-2)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            77 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_ASSIGN;
            },
            78 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_MUL_ASSIGN;
            },
            79 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_DIV_ASSIGN;
            },
            80 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_REM_ASSIGN;
            },
            81 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_ADD_ASSIGN;
            },
            82 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_SUB_ASSIGN;
            },
            83 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_SHL_ASSIGN;
            },
            84 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_SHR_ASSIGN;
            },
            85 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_AND_ASSIGN;
            },
            86 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_XOR_ASSIGN;
            },
            87 => function ($stackPos) {
                $this->semValue = Expr\BinaryOperator::KIND_OR_ASSIGN;
            },
            88 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            89 => function ($stackPos) {
                $this->semValue = new Expr\BinaryOperator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], Expr\BinaryOperator::KIND_COMMA, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            90 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            91 => function ($stackPos) {
                $this->semValue = new IR\Declaration($this->semStack[$stackPos-(2-1)][0], $this->semStack[$stackPos-(2-1)][1], [], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            92 => function ($stackPos) {
                $this->semValue = new IR\Declaration($this->semStack[$stackPos-(3-1)][0], $this->semStack[$stackPos-(3-1)][1], $this->semStack[$stackPos-(3-2)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            93 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos];
            },
            94 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; $this->semValue[0] |= $this->semStack[$stackPos-(2-1)];
            },
            95 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(1-1)], []];
            },
            96 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; array_unshift($this->semValue[1], $this->semStack[$stackPos-(2-1)]);
            },
            97 => function ($stackPos) {
                $this->semValue = [0, [$this->semStack[$stackPos-(1-1)]]];
            },
            98 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; $this->semValue[0] |= $this->semStack[$stackPos-(2-1)];
            },
            99 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(1-1)], []];
            },
            100 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; $this->semValue[0] |= $this->semStack[$stackPos-(2-1)];
            },
            101 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(1-1)], []];
            },
            102 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; $this->semValue[0] |= $this->semStack[$stackPos-(2-1)];
            },
            103 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(1-1)], []];
            },
            104 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            105 => function ($stackPos) {
                $this->semStack[$stackPos-(3-1)][] = $this->semStack[$stackPos-(3-3)]; $this->semValue = $this->semStack[$stackPos-(3-1)];
            },
            106 => function ($stackPos) {
                $this->semValue = new IR\InitDeclarator($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            107 => function ($stackPos) {
                $this->semValue = new IR\InitDeclarator($this->semStack[$stackPos-(1-1)], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            108 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_TYPEDEF;
            },
            109 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_EXTERN;
            },
            110 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_STATIC;
            },
            111 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_THREAD_LOCAL;
            },
            112 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_AUTO;
            },
            113 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_REGISTER;
            },
            114 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            115 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            116 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            117 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            118 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            119 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            120 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            121 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            122 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            123 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            124 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            125 => function ($stackPos) {
                $this->semValue = new Node\Type\BuiltinType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            126 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            127 => function ($stackPos) {
                $this->semValue = new Node\Type\TagType\RecordType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            128 => function ($stackPos) {
                $this->semValue = new Node\Type\TagType\EnumType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            129 => function ($stackPos) {
                $this->semValue = new Node\Type\TypedefType($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            130 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$stackPos-(4-1)], null, $this->semStack[$stackPos-(4-3)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            131 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$stackPos-(5-1)], $this->semStack[$stackPos-(5-2)], $this->semStack[$stackPos-(5-4)], $this->startAttributeStack[$stackPos-(5-1)] + $this->endAttributes);
            },
            132 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$stackPos-(2-1)], $this->semStack[$stackPos-(2-2)], null, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            133 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$stackPos-(5-1)], $this->semStack[$stackPos-(5-2)], $this->semStack[$stackPos-(5-4)], $this->startAttributeStack[$stackPos-(5-1)] + $this->endAttributes);
            },
            134 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$stackPos-(2-1)], $this->semStack[$stackPos-(2-2)], null, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            135 => function ($stackPos) {
                $this->semValue = Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl::KIND_STRUCT;
            },
            136 => function ($stackPos) {
                $this->semValue = Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl::KIND_UNION;
            },
            137 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            138 => function ($stackPos) {
                $this->semValue = array_merge($this->semStack[$stackPos-(2-1)], $this->semStack[$stackPos-(2-2)]);
            },
            139 => function ($stackPos) {
                $this->semValue = $this->compiler->compileStructField($this->semStack[$stackPos-(2-1)][0], $this->semStack[$stackPos-(2-1)][1], null, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            140 => function ($stackPos) {
                $this->semValue = $this->compiler->compileStructField($this->semStack[$stackPos-(3-1)][0], $this->semStack[$stackPos-(3-1)][1], $this->semStack[$stackPos-(3-2)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            141 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos];
            },
            142 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; array_unshift($this->semValue[1], $this->semStack[$stackPos-(2-1)]);
            },
            143 => function ($stackPos) {
                $this->semValue = [0, [$this->semStack[$stackPos-(1-1)]]];
            },
            144 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-2)]; $this->semValue[0] |= $this->semStack[$stackPos-(2-1)];
            },
            145 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(1-1)], []];
            },
            146 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            147 => function ($stackPos) {
                $this->semStack[$stackPos-(3-1)][] = $this->semStack[$stackPos-(3-3)]; $this->semValue = $this->semStack[$stackPos-(3-1)];
            },
            148 => function ($stackPos) {
                $this->semValue = new IR\FieldDeclaration(null, $this->semStack[$stackPos-(2-1)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            149 => function ($stackPos) {
                $this->semValue = new IR\FieldDeclaration($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            150 => function ($stackPos) {
                $this->semValue = new IR\FieldDeclaration($this->semStack[$stackPos-(1-1)], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            151 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl(null, $this->semStack[$stackPos-(4-3)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            152 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl(null, $this->semStack[$stackPos-(5-3)], $this->startAttributeStack[$stackPos-(5-1)] + $this->endAttributes);
            },
            153 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$stackPos-(5-2)], $this->semStack[$stackPos-(5-4)], $this->startAttributeStack[$stackPos-(5-1)] + $this->endAttributes);
            },
            154 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$stackPos-(6-2)], $this->semStack[$stackPos-(6-4)], $this->startAttributeStack[$stackPos-(6-1)] + $this->endAttributes);
            },
            155 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$stackPos-(2-2)], null, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            156 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            157 => function ($stackPos) {
                $this->semStack[$stackPos-(3-1)][] = $this->semStack[$stackPos-(3-3)]; $this->semValue = $this->semStack[$stackPos-(3-1)];
            },
            158 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\ValueDecl\EnumConstantDecl($this->semStack[$stackPos-(3-1)], $this->semStack[$stackPos-(3-3)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes); $this->scope->enumdef($this->semStack[$stackPos-(3-1)], $this->semValue);
            },
            159 => function ($stackPos) {
                $this->semValue = new Node\Decl\NamedDecl\ValueDecl\EnumConstantDecl($this->semStack[$stackPos-(1-1)], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes); $this->scope->enumdef($this->semStack[$stackPos-(1-1)], $this->semValue);
            },
            160 => function ($stackPos) {
                throw new Error('atomic type_name not implemented');
            },
            161 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_CONST;
            },
            162 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_RESTRICT;
            },
            163 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_VOLATILE;
            },
            164 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_ATOMIC;
            },
            165 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_INLINE;
            },
            166 => function ($stackPos) {
                $this->semValue = Node\Decl::KIND_NORETURN;
            },
            167 => function ($stackPos) {
                throw new Error('alignas type_name not implemented');
            },
            168 => function ($stackPos) {
                throw new Error('alignas constant_expression not implemented');
            },
            169 => function ($stackPos) {
                $this->semValue = new IR\Declarator($this->semStack[$stackPos-(2-1)], $this->semStack[$stackPos-(2-2)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            170 => function ($stackPos) {
                $this->semValue = new IR\Declarator(null, $this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            171 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\Identifier($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            172 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\Declarator($this->semStack[$stackPos-(3-2)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            173 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\IncompleteArray($this->semStack[$stackPos-(3-1)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            174 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\IncompleteArray($this->semStack[$stackPos-(4-1)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            175 => function ($stackPos) {
                throw new Error('direct_declarator bracket static type_qualifier_list assignment_expression not implemented');
            },
            176 => function ($stackPos) {
                throw new Error('direct_declarator bracket static assignment_expression not implemented');
            },
            177 => function ($stackPos) {
                throw new Error('direct_declarator bracket type_qualifier_list star not implemented');
            },
            178 => function ($stackPos) {
                throw new Error('direct_declarator bracket type_qualifier_list static assignment_expression not implemented');
            },
            179 => function ($stackPos) {
                throw new Error('direct_declarator bracket type_qualifier_list assignment_expression not implemented');
            },
            180 => function ($stackPos) {
                throw new Error('direct_declarator bracket type_qualifier_list not implemented');
            },
            181 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\CompleteArray($this->semStack[$stackPos-(4-1)], $this->semStack[$stackPos-(4-3)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            182 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\Function_($this->semStack[$stackPos-(4-1)], $this->semStack[$stackPos-(4-3)][0], $this->semStack[$stackPos-(4-3)][1], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            183 => function ($stackPos) {
                $this->semValue = new IR\DirectDeclarator\Function_($this->semStack[$stackPos-(3-1)], [], false, $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            184 => function ($stackPos) {
                throw new Error('direct_declarator params identifier list not implemented');
            },
            185 => function ($stackPos) {
                $this->semValue = new IR\QualifiedPointer($this->semStack[$stackPos-(3-2)], $this->semStack[$stackPos-(3-3)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            186 => function ($stackPos) {
                $this->semValue = new IR\QualifiedPointer($this->semStack[$stackPos-(2-2)], null, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            187 => function ($stackPos) {
                $this->semValue = new IR\QualifiedPointer(0, $this->semStack[$stackPos-(2-2)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            188 => function ($stackPos) {
                $this->semValue = new IR\QualifiedPointer(0, null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            189 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            190 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-1)] | $this->semStack[$stackPos-(2-2)];
            },
            191 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(3-1)], true];
            },
            192 => function ($stackPos) {
                $this->semValue = [$this->semStack[$stackPos-(1-1)], false];
            },
            193 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            194 => function ($stackPos) {
                $this->semStack[$stackPos-(3-1)][] = $this->semStack[$stackPos-(3-3)]; $this->semValue = $this->semStack[$stackPos-(3-1)];
            },
            195 => function ($stackPos) {
                $this->semValue = $this->compiler->compileParamVarDeclaration($this->semStack[$stackPos-(2-1)][0], $this->semStack[$stackPos-(2-1)][1], $this->semStack[$stackPos-(2-2)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            196 => function ($stackPos) {
                $this->semValue = $this->compiler->compileParamAbstractDeclaration($this->semStack[$stackPos-(2-1)][0], $this->semStack[$stackPos-(2-1)][1], $this->semStack[$stackPos-(2-2)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            197 => function ($stackPos) {
                $this->semValue = $this->compiler->compileParamAbstractDeclaration($this->semStack[$stackPos-(1-1)][0], $this->semStack[$stackPos-(1-1)][1], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            198 => function ($stackPos) {
                throw new Error('identifier_list identifier not implemented');
            },
            199 => function ($stackPos) {
                throw new Error('identifier_list identifier_list identifier not implemented');
            },
            200 => function ($stackPos) {
                $this->semValue = $this->compiler->compileTypeReference($this->semStack[$stackPos-(2-1)][0], $this->semStack[$stackPos-(2-1)][1], $this->semStack[$stackPos-(2-2)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            201 => function ($stackPos) {
                $this->semValue = $this->compiler->compileTypeReference($this->semStack[$stackPos-(1-1)][0], $this->semStack[$stackPos-(1-1)][1], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            202 => function ($stackPos) {
                $this->semValue = new IR\AbstractDeclarator($this->semStack[$stackPos-(2-1)], $this->semStack[$stackPos-(2-2)], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            203 => function ($stackPos) {
                $this->semValue = new IR\AbstractDeclarator($this->semStack[$stackPos-(1-1)], null, $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            204 => function ($stackPos) {
                $this->semValue = new IR\AbstractDeclarator(null, $this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            205 => function ($stackPos) {
                $this->semValue = new IR\DirectAbstractDeclarator\AbstractDeclarator($this->semStack[$stackPos-(3-1)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            206 => function ($stackPos) {
                $this->semValue = new IR\DirectAbstractDeclarator\IncompleteArray($this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            207 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket star not implemented');
            },
            208 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket static type qualifier list assignment not implemented');
            },
            209 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket static assignment not implemented');
            },
            210 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket type qualifier list static assignment not implemented');
            },
            211 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket type qualifier list assignment not implemented');
            },
            212 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket type qualifier list not implemented');
            },
            213 => function ($stackPos) {
                throw new Error('direct_abstract_declarator bracket assignment_expr not implemented');
            },
            214 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket not implemented');
            },
            215 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket star not implemented');
            },
            216 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket static type qualifier list assignment not implemented');
            },
            217 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket static assignment not implemented');
            },
            218 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket type qualifier list assignment not implemented');
            },
            219 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket type qualifier list static asssignment not implemented');
            },
            220 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket type qualifier list not implemented');
            },
            221 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with bracket assignment_expr not implemented');
            },
            222 => function ($stackPos) {
                throw new Error('direct_abstract_declarator empty parameter list not implemented');
            },
            223 => function ($stackPos) {
                throw new Error('direct_abstract_declarator parameter list not implemented');
            },
            224 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with empty parameter list not implemented');
            },
            225 => function ($stackPos) {
                throw new Error('direct_abstract_declarator with parameter list not implemented');
            },
            226 => function ($stackPos) {
                throw new Error('initializer brackend no trailing not implemented');
            },
            227 => function ($stackPos) {
                throw new Error('initializer brackeded trailing not implemented');
            },
            228 => function ($stackPos) {
                throw new Error('initializer assignment_expression not implemented');
            },
            229 => function ($stackPos) {
                throw new Error('initializer_list designator initializer not implemented');
            },
            230 => function ($stackPos) {
                throw new Error('initializer_list initializer not implemented');
            },
            231 => function ($stackPos) {
                throw new Error('initializer_list initializer_list designator initializer not implemented');
            },
            232 => function ($stackPos) {
                throw new Error('initializer_list initializer_list initializer not implemented');
            },
            233 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos];
            },
            234 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            235 => function ($stackPos) {
                $this->semStack[$stackPos-(2-1)][] = $this->semStack[$stackPos-(2-2)]; $this->semValue = $this->semStack[$stackPos-(2-1)];
            },
            236 => function ($stackPos) {
                throw new Error('[] designator not implemented');
            },
            237 => function ($stackPos) {
                throw new Error('. designator not implemented');
            },
            238 => function ($stackPos) {
                throw new Error('static assert declaration not implemented');
            },
            239 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            240 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            241 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            242 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            243 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            244 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            245 => function ($stackPos) {
                throw new Error('labeled_statement identifier not implemented');
            },
            246 => function ($stackPos) {
                throw new Error('labeled_statement case not implemented');
            },
            247 => function ($stackPos) {
                throw new Error('labeled_statement default not implemented');
            },
            248 => function ($stackPos) {
                $this->semValue = new Node\Stmt\CompoundStmt([], $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            249 => function ($stackPos) {
                $this->semValue = new Node\Stmt\CompoundStmt($this->semStack[$stackPos-(3-2)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            250 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            251 => function ($stackPos) {
                $this->semStack[$stackPos-(2-1)][] = $this->semStack[$stackPos-(2-2)]; $this->semValue = $this->semStack[$stackPos-(2-1)];
            },
            252 => function ($stackPos) {
                throw new Error('block_item declaration not implemented');
            },
            253 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            254 => function ($stackPos) {
                $this->semValue = null;
            },
            255 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-1)];
            },
            256 => function ($stackPos) {
                throw new Error('if else not implemented');
            },
            257 => function ($stackPos) {
                throw new Error('if not implemented');
            },
            258 => function ($stackPos) {
                throw new Error('switch not implemented');
            },
            259 => function ($stackPos) {
                throw new Error('iteration 0 not implemented');
            },
            260 => function ($stackPos) {
                throw new Error('iteration 1 not implemented');
            },
            261 => function ($stackPos) {
                throw new Error('iteration 2 not implemented');
            },
            262 => function ($stackPos) {
                throw new Error('iteration 3 not implemented');
            },
            263 => function ($stackPos) {
                throw new Error('iteration 4 not implemented');
            },
            264 => function ($stackPos) {
                throw new Error('iteration 5 not implemented');
            },
            265 => function ($stackPos) {
                throw new Error('goto identifier not implemented');
            },
            266 => function ($stackPos) {
                throw new Error('continue not implemented');
            },
            267 => function ($stackPos) {
                throw new Error('break not implemented');
            },
            268 => function ($stackPos) {
                $this->semValue = new Node\Stmt\ReturnStmt(null, $this->startAttributeStack[$stackPos-(2-1)] + $this->endAttributes);
            },
            269 => function ($stackPos) {
                $this->semValue = new Node\Stmt\ReturnStmt($this->semStack[$stackPos-(3-2)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            270 => function ($stackPos) {
                $this->semValue = new Node\TranslationUnitDecl($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            271 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(2-1)]; $this->semValue->addDecl(...$this->semStack[$stackPos-(2-2)]);
            },
            272 => function ($stackPos) {
                $this->semValue = $this->semStack[$stackPos-(1-1)];
            },
            273 => function ($stackPos) {
                $this->semValue = $this->compiler->compileExternalDeclaration($this->semStack[$stackPos-(1-1)], $this->startAttributeStack[$stackPos-(1-1)] + $this->endAttributes);
            },
            274 => function ($stackPos) {
                $this->semValue = $this->compiler->compileFunction($this->semStack[$stackPos-(4-1)][0], $this->semStack[$stackPos-(4-1)][1], $this->semStack[$stackPos-(4-2)], $this->semStack[$stackPos-(4-3)], $this->semStack[$stackPos-(4-4)], $this->startAttributeStack[$stackPos-(4-1)] + $this->endAttributes);
            },
            275 => function ($stackPos) {
                $this->semValue = $this->compiler->compileFunction($this->semStack[$stackPos-(3-1)][0], $this->semStack[$stackPos-(3-1)][1], $this->semStack[$stackPos-(3-2)], [], $this->semStack[$stackPos-(3-3)], $this->startAttributeStack[$stackPos-(3-1)] + $this->endAttributes);
            },
            276 => function ($stackPos) {
                $this->semValue = array($this->semStack[$stackPos-(1-1)]);
            },
            277 => function ($stackPos) {
                $this->semStack[$stackPos-(2-1)][] = $this->semStack[$stackPos-(2-2)]; $this->semValue = $this->semStack[$stackPos-(2-1)];
            },
        ];
    }
}
