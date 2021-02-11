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
use Zend\C\ExpressionTokens;

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

    /**
     *
     * $tokens = new Tokens();
     * $stream = new Stream($tokens);
     * $scanner = new Scanner($stream);
     * $parser = new Parser($stream);
     * $parser->context->typedef('guint', 'unsigned int');
     *
     * $parser->typedef('typedef struct _Foo Foo;');
     *
     */
    public function testParser() {
        $this->printer = new C;

        $context = new \Zend\C\Engine\Context;

        $parser = new \Zend\C\Parser($context);
        $parser->parse(__DIR__ . '/../data/config.h');
        //$context->defineIdentifier('gdouble', 'double');
        /*
        $context->scope->typedef('pthread_t', new BuiltinType('pthread_t'));
        $context->scope->typedef('GStaticMutex', new BuiltinType('GStaticMutex'));
        $context->scope->typedef('guint', new BuiltinType('unsigned int'));
        $context->scope->typedef('gdouble', new BuiltinType('double'));
        */


        $translationUnit = $parser->parse(__DIR__ . '/../data/struct.h');
        $actual = $this->printer->print($translationUnit);
        $this->assertEquals(self::EXPECTED, trim($actual));

        // TODO make remain resolve type
        //$translationUnit = $parser->parse(__DIR__ . '/../data/struct-dependency.h');
        //echo $this->printer->print($translationUnit);

        $this->assertTrue(True);
    }

    public function testEnumerationParser() {
        $expected = 'typedef enum {
  G_BOOKMARK_FILE_ERROR_INVALID_URI,
  G_BOOKMARK_FILE_ERROR_INVALID_VALUE,
  G_BOOKMARK_FILE_ERROR_APP_NOT_REGISTERED,
  G_BOOKMARK_FILE_ERROR_URI_NOT_FOUND,
  G_BOOKMARK_FILE_ERROR_READ,
  G_BOOKMARK_FILE_ERROR_UNKNOWN_ENCODING,
  G_BOOKMARK_FILE_ERROR_WRITE,
  G_BOOKMARK_FILE_ERROR_FILE_NOT_FOUND,
} GBookmarkFileError;';
        $expected_array = array('enums'=>array(
            'GBookmarkFileError'=>array(
                'name'=>'GBookmarkFileError',
                'constants'=>array(
                    'G_BOOKMARK_FILE_ERROR_INVALID_URI' => 0,//array('name'=>'G_BOOKMARK_FILE_ERROR_INVALID_URI', 'value'=>0),
                    'G_BOOKMARK_FILE_ERROR_INVALID_VALUE' => 1,
                    'G_BOOKMARK_FILE_ERROR_APP_NOT_REGISTERED' => 2,
                    'G_BOOKMARK_FILE_ERROR_URI_NOT_FOUND' => 3,
                    'G_BOOKMARK_FILE_ERROR_READ' => 4,
                    'G_BOOKMARK_FILE_ERROR_UNKNOWN_ENCODING' => 5,
                    'G_BOOKMARK_FILE_ERROR_WRITE' => 6,
                    'G_BOOKMARK_FILE_ERROR_FILE_NOT_FOUND' => 7,
                )
            )
        ));
        $printer = new C;//PhpPrinter;

        $context = new \Zend\C\Engine\Context;

        $parser = new \Zend\C\Parser($context);
        $parser->parse(__DIR__ . '/../data/config.h');

        $translationUnit = $parser->parse(__DIR__ . '/../data/header.h');
        //var_export($translationUnit);
        $actual = $printer->print($translationUnit);
        $this->assertEquals($expected, trim($actual));

        $this->assertTrue(True);
    }
    protected function setUp()
    {
        $this->context = new \Zend\C\Engine\Context;
        $lexer = new \Zend\C\Engine\Lexer;
        $this->parser = new \Zend\C\ExpressionParser($lexer);

        $this->preprocessor = new PreProcessor($this->context);
        $tokens = $this->preprocessor->process(__DIR__ . '/../data/config.h');
        $this->parser->parse($tokens, $this->context);
    }

    public function filenameProvider():array
    {
        return [
            ['enum', 'GBookmarkFileError'],
#            ['enum', 'GDateDMY'],
#            ['enum', 'GFileTest'],
#            ['enum', 'GIOChannelError'],
#            ['enum', 'GIOFlags'],
        ];
    }

    /**
     * @dataProvider filenameProvider
     */
    function testExpressionParser($type, $name) {
        $printer = new PhpPrinter;

        $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
        $tokens = $this->preprocessor->process($data_filename);
        $ast = $this->parser->parse($tokens, $this->context);

        $printer->print($ast);

        $actual = $printer->array[$type.'s'][$name];
        //print_r($actual);

        $expect = include __DIR__.'/expect/'.$type.'-'.$name.'.php';
        //print_r($expect);
        $this->assertTrue($expect === $actual);

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

        $datas = $this->enumsProvider();
        foreach($datas as list($type, $name)) {
            //list($type, $name) = $data;
            $data_filename = __DIR__.'/data/'.$type.'-'.$name.'.h';
            $tokens = $this->preprocessor->process($data_filename);
            $ast = $this->parser->parse($tokens, $this->context);
            $printer->print($ast);
        }

        $expected = include __DIR__.'/expect/eval-enums.php';
        $actual = $printer->evaluate();
        //print_r($actual);

        $this->assertEquals($expected, $actual);
        $this->assertTrue($expected===$actual);
        $this->assertTrue(True);
    }
}
