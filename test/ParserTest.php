<?php


namespace Zend\C\Test;

use Zend\C\Parser;
use Zend\C\Engine\Lexer;
use Zend\C\Engine\Context;
use Zend\C\Engine\Printer\C;

use PHPUnit\Framework\TestCase;

/**
 *
 */
class ParserTest extends TestCase {
    const EXPECTED = 'struct _Test {
  union _Unused {
    char foo;
    int depth;
  } unused;
  int foo;
};';

    public function testParser() {
        $includes = '#include <glib.h>';

        $context = new \Zend\C\Engine\Context;
        $parser = new \Zend\C\Parser;
        //$this->parser->addSearchPath(__DIR__);
/*        /usr/lib/gcc/x86_64-linux-gnu/7/include
 /usr/local/include
 /usr/lib/gcc/x86_64-linux-gnu/7/include-fixed
            /usr/include/x86_64-linux-gnu
            /usr/include*/
        /*$this->parser->addSearchPath('/usr/include');
        $this->parser->addSearchPath('/usr/include/glib-2.0/');
        $this->parser->addSearchPath('/usr/include/linux/');
        $this->parser->addSearchPath('/usr/lib/x86_64-linux-gnu/glib-2.0/include/');*/
        $this->printer = new C;
        //try to include guint etc... glib

        //$translationUnit = $this->parser->parse('/usr/include/glib-2.0/glib.h');
        $translationUnit = $parser->parse(__DIR__ . '/../data/struct.h');
        //$translationUnit = $this->parser->parse(__DIR__ . '/../data/header.h');
        //$translationUnit = $this->parser->parse(__DIR__ . '/../data/typedefTest.c');
        //$translationUnit = $this->parser->parse(__DIR__ . '/../data/typedefTest.c');
//var_export($translationUnit);
        $actual = $this->printer->print($translationUnit);
        $this->assertEquals(self::EXPECTED, trim($actual));

        $this->assertTrue(True);
    }

    /**
    String $cStatement = "typedef guint8 word";

    CLexer $lexer = new CLexer($tokens);
    //$lexer->scan($cStatement);

    CParser $parser = new CParser($lexer);
    $parser->yyerror=function(string s){};
    $parser->yywrap=function(){return 1;};
    Parser::scan($cStatement);// output array ast_tree
    //array tree = parser->statement($cStatement);
     */
    public function xxxtestExpressionParser() {
        $context = new \Zend\C\Engine\Context();
        $context->defineInt('G_OS_WIN32', 1);
        //$context->addSearchPath('/usr/include/linux/');// REFACTOR : $parser->addSearchPath

        $lexer = new \Zend\C\Engine\Lexer();
        $parser = new \Zend\C\ExpressionParser($lexer);
        //$parser->addContext($context);

        //$tokens = new \Zend\C\ExpressionTokens();
        $preprocessor = new \Zend\C\Engine\PreProcessor($context);
        $tokens = $preprocessor->process('/home/dev/Projects/phpgtk/zend-c/data/expression.h');
        $parser->parse($tokens, $context);

        /*
         * PHPCParser::__construct()
        $this->context = $context ?? new Context($this->headerSearchPaths);
        //$this->context->defineInt('G_OS_WIN32', 1);
        //$this->context->defineInt('__GLIB_H_INSIDE__', 1);// because not #define assumed
        $preprocessor = new PreProcessor($this->context);
        $tokens = $preprocessor->process($filename);
        return $this->parser->parse($tokens, $this->context);

        */
        $this->assertTrue(True);
    }
}
