<?php


namespace Zend\C\Test;

use Zend\C\Engine\PreProcessor;
use Zend\C\Parser;
use Zend\C\PhpPrinter;
use Zend\C\Engine\Lexer;
use Zend\C\Engine\Context;
use Zend\C\Engine\PreProcessor\Token;
use Zend\C\Engine\Node\Type\BuiltinType;
use Zend\C\Engine\Printer\C;

use Zend\C\ExpressionParser;
//use Zend\C\ExpressionTokens;

use PHPUnit\Framework\TestCase;

/**
 *
 */
class ParserTest extends TestCase {
    const EXPECTED = 'struct _GStaticRecMutex {
  GStaticMutex mutex;
  guint depth;
  union {
    pthread_t owner;
    gdouble dummy;
  } unused;
};';
    protected function setUp()
    {
        $this->context = new \Zend\C\Engine\Context;
        $lexer = new \Zend\C\Engine\Lexer;
        $this->parser = new \Zend\C\ExpressionParser($lexer);

        $this->preprocessor = new PreProcessor($this->context);
        $tokens = $this->preprocessor->process(__DIR__ . '/../data/config.h');
        $this->parser->parse($tokens, $this->context);
    }
    public function testUnionParser() {
        $data_filename = __DIR__.'/data/union-GMutex.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        //var_dump($ast);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);

        $expected = include __DIR__.'/expect/union-GMutex.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        $this->assertTrue(True);
    }

    public function testStructParser() {
        $data_filename = __DIR__.'/data/struct-GStaticRecMutex.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $printer->print($ast, $actual);

        $expected = include __DIR__.'/expect/struct-GStaticRecMutex.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        /*
        $actual = $printer->evaluate();
        */

        $this->assertTrue(True);
    }

    public function filenameProvider():array
    {
        return [
#            ['enum', 'GBookmarkFileError'],
#            ['enum', 'GDateDMY'],
#            ['enum', 'GFileTest'],
#            ['enum', 'GIOChannelError'],
#            ['enum', 'GIOFlags'],
#            ['enum', 'GIOCondition']
#            ['enum', 'GLogLevelFlags']
#            ['enum', 'GTokenType']
            ['enum', 'GVariantClass']
        ];
    }

    /**
     * @dataProvider filenameProvider
     */
    function testEnumParser($type, $name) {
        $printer = new PhpPrinter;

        $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);


        $printer->print($ast, $actual);
        $printer->evaluate($actual);

        $expected = include __DIR__.'/expect/'.$type.'-'.$name.'.php';
        print_r($actual);
        print_r($expected);

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected === $actual);
        $this->assertTrue(True);
    }

    public function enumsProvider():array
    {
        return [
            ['enum', 'GBookmarkFileError'],
            ['enum', 'GDateDMY'],
            ['enum', 'GFileTest'],
            ['enum', 'GIOChannelError'],
            ['enum', 'GIOFlags'],
        ];
    }

    function testEnumsParser() {
        $printer = new PhpPrinter;

        $actual = array();
        $datas = $this->enumsProvider();
        foreach($datas as list($type, $name)) {
            //list($type, $name) = $data;
            $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
            $tokens = $this->preprocessor->process($data_filename);
            $ast = $this->parser->parse($tokens, $this->context);
            $printer->print($ast, $actual);
        }

        $expected = include __DIR__.'/expect/eval-enums.php';
        $printer->evaluate($actual);
        $actual['typedefs'] = array();
        //print_r($actual);

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        $this->assertTrue(True);
    }
}
