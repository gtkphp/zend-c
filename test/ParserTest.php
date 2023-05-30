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
use Zend\C\MacroParser;


use Zend\C\ExpressionParser;
//use Zend\C\ExpressionTokens;

use PHPUnit\Framework\TestCase;

/**
 * @TODO 'functions'=>array(...)
 *  testFunctionParser
 *  testFunctionDeclParser
 */
class ParserTest extends TestCase {
    public $context;
    public $parser;
    public $preprocessor;

    protected function setUp()
    {
        $this->context = new \Zend\C\Engine\Context;
        $lexer = new \Zend\C\Engine\Lexer;
        $this->parser = new \Zend\C\ExpressionParser($lexer);

        $this->preprocessor = new PreProcessor($this->context);
        //$tokens = $this->preprocessor->process(__DIR__ . '/../data/config.h');
        //$this->parser->parse($tokens, $this->context);
    }
    
    
    public function testGLibParser() {
        //$tokens = $this->preprocessor->process(__DIR__ . '/data/config-gboolean.h');
        $tokens = $this->preprocessor->process(__DIR__ . '/data/glib-decl.h');
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);
        //print_r($actual);

        /*$types = $this->parser->getTypes();
        $keys = array_keys($types);
        print_r($keys);*/

        $this->assertTrue(True);
    }

    public function testMultiTypedefParser() {
        //$tokens = $this->preprocessor->process('/home/dev/Projets/zend-ext/data/config-glib.h');
        //$this->parser->parse($tokens, $this->context);
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GDestroyNotify.h');
        $this->parser->parse($tokens, $this->context);

        $tokens = $this->preprocessor->process(__DIR__ . '/data/struct-MotifWmHints.h');
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);
        //print_r($actual);

        /*
        We expect Macro ... 
        */

        /*
        $types = $this->parser->getTypes();
        $keys = array_keys($types);
        print_r($keys);
        */

        /*
        $expected = include __DIR__.'/expect/typedef-gboolean.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        */
        $this->assertTrue(False);
    }

    public function testTypedefStructParser() {

        $data_filename = __DIR__.'/data/typedef-MotifWmInfo.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);
        //print_r($actual);
        //print_r($actual['typedefs']);

        /*$types = $this->parser->getTypes();
        $keys = array_keys($types);
        print_r($keys);*/

        /*
        $expected = include __DIR__.'/expect/typedef-GDestroyNotify.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        */
        $this->assertTrue(true);
    }

    public function testTypeParser() {
        //$tokens = $this->preprocessor->process(__DIR__ . '/data/config-gboolean.h');
        ///$tokens = $this->preprocessor->process(__DIR__ . '/data/config-GDestroyNotify.h');
        ///$this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/typedef-guint.h';
        $tokens = $this->preprocessor->process($data_filename);
        //print_r($tokens);
        $ast = $this->parser->parse($tokens, $this->context);
        //print_r($ast);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);
        print_r($actual['typedefs']);


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

    public function testTypedefParser() {
        //$tokens = $this->preprocessor->process(__DIR__ . '/data/config-gboolean.h');
        ///$tokens = $this->preprocessor->process(__DIR__ . '/data/config-GDestroyNotify.h');
        ///$this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/typedef-guint.h';
        $tokens = $this->preprocessor->process($data_filename);
        //print_r($tokens);
        $ast = $this->parser->parse($tokens, $this->context);
        //print_r($ast);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);
        print_r($actual['typedefs']);


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
        //echo PHP_EOL, "\e[31;4m", 'void __builtin_alloca(int size);', "\e[0m", PHP_EOL;
        //print_r($tokens);
        $ast = $this->parser->parse($tokens, $this->context);
        //var_dump($ast);

        $data_filename = __DIR__.'/data/macro-alloca.h';
        $tokens = $this->preprocessor->process($data_filename);

        /*
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);
        //print_r($actual);
        */

        //echo PHP_EOL, "\e[31;4m", '#define alloca(size)   __builtin_alloca (size)', "\e[0m", PHP_EOL;
        $defines = $this->preprocessor->getDefinitions();
        //print_r($defines);
        $macro = $defines['CAIRO_VERSION_ENCODE'];
        $parser = new MacroParser();
        $m = $parser->parse($macro);
        print_r($m);
        // How to convert it in instruction ?
        // - constant
        // - function

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

        $data_filename = __DIR__.'/data/union-GMutex.h';
        //$data_filename = __DIR__.'/data/union-GDoubleIEEE754.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        //var_dump($ast);

        $printer = new PhpPrinter;
        $actual = array();
        $printer->print($ast, $actual);

        //print_r($actual);

        $expected = include __DIR__.'/expect/union-GMutex.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        /*
        $this->assertTrue(True);
        */
    }

    public function structProvider():array
    {
        return [
            //['struct', 'GStaticRecMutex'],
            //['struct', 'GDate'],
            //['struct', 'GIOFuncs'],
            ['struct', 'GArray']
        ];
    }

    /**
     * @dataProvider structProvider
     */
    function testStructsParser($type, $name) {
        $printer = new PhpPrinter;
        $config = __DIR__ . '/data/config-'.$name.'.h';
        if (file_exists($config)) {
            $tokens = $this->preprocessor->process($config);
            $ast = $this->parser->parse($tokens, $this->context);
        }

        $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);


        $printer->print($ast, $actual);
        //$printer->evaluate($actual);// replace gint to int

        $expected = include __DIR__.'/expect/'.$type.'-'.$name.'.php';
        print_r($actual);
        //print_r($expected);

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected === $actual);

    }

    public function testStructParser() {
        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GStaticRecMutex.h');
        $this->parser->parse($tokens, $this->context);

        $data_filename = __DIR__.'/data/struct-GStaticRecMutex.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $printer->print($ast, $actual);
        //print_r($actual);

        $expected = include __DIR__.'/expect/struct-GStaticRecMutex.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);

    }
    public function testFunctionDeclParser() {

        $printer = new PhpPrinter;

        $tokens = $this->preprocessor->process(__DIR__ . '/data/config-GHashTable.h');
        $ast = $this->parser->parse($tokens, $this->context);
        //$printer->print($ast, $actual);// append config-GHashTable.h to $actual

        $data_filename = __DIR__.'/data/func-GHashTable.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer->print($ast, $actual);

        //print_r($actual);
        //$actual = $printer->evaluate($actual);

        $expected = include __DIR__.'/expect/func-GHashTable.php';
        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        
    }

    public function testFunctionParser() {
        $data_filename = __DIR__.'/data/func-GObject.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer = new PhpPrinter;
        $printer->print($ast, $actual);

        //print_r($actual);
        $expected = include __DIR__.'/expect/func-GObject.php';

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
    }
    

    public function enumProvider():array
    {
        return [
            ['enum', 'GIOCondition'],
            ['enum', 'GLogLevelFlags'],
            ['enum', 'GTokenType'],
            ['enum', 'GVariantClass'],
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
        //print_r($ast);


        $printer->print($ast, $actual);
        //print_r($actual);
        $printer->evaluate($actual);

        $expected = include __DIR__.'/expect/'.$type.'-'.$name.'.php';
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
        //print_r($actual);
        //print_r($expected);

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        $this->assertTrue(True);
    }
}
