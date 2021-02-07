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
  union {
    char foo;
    int depth;
  } unused;
};';

    public function testParser() {
        $includes = '#include <glib.h>';

        $this->parser = new Parser;
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
        $translationUnit = $this->parser->parse(__DIR__ . '/../data/struct.h');
        //$translationUnit = $this->parser->parse(__DIR__ . '/../data/typedefTest.c');
        $actual = $this->printer->print($translationUnit);
        $this->assertEquals(self::EXPECTED, trim($actual));

        $this->assertTrue(True);
    }
}
