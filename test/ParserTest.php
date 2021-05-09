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

    protected function setUp()
    {
        $this->context = new \Zend\C\Engine\Context;
        $lexer = new \Zend\C\Engine\Lexer;
        $this->parser = new \Zend\C\ExpressionParser($lexer);

        $this->preprocessor = new PreProcessor($this->context);
        //$tokens = $this->preprocessor->process(__DIR__ . '/../data/config.h');
        //$this->parser->parse($tokens, $this->context);
    }
    
    public function testMultiTypedefParser() {
        //$tokens = $this->preprocessor->process('/home/dev/Projets/zend-ext/data/config-glib.h');
        //$this->parser->parse($tokens, $this->context);
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GDestroyNotify.h');
        $this->parser->parse($tokens, $this->context);

        $tokens = $this->preprocessor->process(__DIR__ . '/data/struct-MotifWmHints.h');
        $this->parser->parse($tokens, $this->context);

        $types = $this->parser->getTypes();
        $keys = array_keys($types);
        print_r($keys);

        /*
        $expected = include __DIR__.'/expect/typedef-gboolean.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        */
        $this->assertTrue(True);
    }

    public function testTypedefParser() {
        //$tokens = $this->preprocessor->process(__DIR__ . '/data/config-gboolean.h');
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GDestroyNotify.h');
        $this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/typedef-GDestroyNotify.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        /*$types = $this->parser->getTypes();
        $keys = array_keys($types);
        print_r($keys);*/

        /*
        $expected = include __DIR__.'/expect/typedef-gboolean.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        */
        $this->assertTrue(True);
    }

    public function testMacroParser() {
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-alloca.h');
        $this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/macro-alloca.h';
        $tokens = $this->preprocessor->process($data_filename);
        var_dump($tokens);
        //$ast = $this->parser->parse($tokens, $this->context);

        /*$types = $this->parser->getTypes();
        $keys = array_keys($types);
        print_r($keys);*/

        /*
        $expected = include __DIR__.'/expect/typedef-gboolean.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        */
        $this->assertTrue(True);
    }

    public function testUnionParser() {
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GMutex.h');
        $this->parser->parse($tokens, $this->context);

        //$data_filename = __DIR__.'/data/union-GMutex.h';
        $data_filename = __DIR__.'/data/union-GDoubleIEEE754.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        //var_dump($ast);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);

        print_r($actual);

        /*
        $expected = include __DIR__.'/expect/union-GMutex.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        */
        $this->assertTrue(True);
    }

    public function structProvider():array
    {
        return [
#            ['struct', 'GStaticRecMutex'],
#            ['struct', 'GDate'],
#            ['struct', 'GIOFuncs'],
            ['struct', 'GArray']
        ];
    }

    /**
     * @dataProvider structProvider
     */
    function testStructsParser($type, $name) {
        $printer = new PhpPrinter;
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-'.$name.'.h');
        $ast = $this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);


        $printer->print($ast, $actual);
        //$printer->evaluate($actual);// replace gint to int

        $expected = include __DIR__.'/expect/'.$type.'-'.$name.'.php';
        //print_r($actual);
        //print_r($expected);

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected === $actual);
        $this->assertTrue(True);
    }

    public function testStructParser() {
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GStaticRecMutex.h');
        $this->parser->parse($tokens, $this->context);

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

    public function testFunctionDeclParser() {
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GHashTable.h');
        $this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/func-GHashTable.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $printer->print($ast, $actual);

        print_r($actual);
        //$actual = $printer->evaluate();

        $expected = include __DIR__.'/expect/func-GHashTable.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        $this->assertTrue(True);
    }

    public function testFunctionParser() {

        $data_filename = __DIR__.'/data/func-GObject.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $printer->print($ast, $actual);
        print_r($actual);

        $this->assertTrue(True);
    }
    

    public function enumProvider():array
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
     * @dataProvider enumProvider
     */
    function testEnumParser($type, $name) {
        $printer = new PhpPrinter;

        $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);


        $printer->print($ast, $actual);
        $printer->evaluate($actual);

        $expected = include __DIR__.'/expect/'.$type.'-'.$name.'.php';
        //print_r($actual);
        //print_r($expected);

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
