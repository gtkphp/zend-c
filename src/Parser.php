<?php

namespace Zend\C;

use Zend\C\Engine\Node\TranslationUnitDecl;
use Zend\C\Engine\Lexer;
use Zend\C\Engine\Context;
use Zend\C\Engine\PreProcessor;



class Parser
{

    private $context;//Context
    private $parser;//Parser
    private $headerSearchPaths = array();

    public function __construct() {
        $this->parser = new \Zend\C\Engine\Parser(new Lexer);
    }

    public function parse(string $filename, ?Context $context = null): TranslationUnitDecl {
        // Create the preprocessor every time, since it shouldn't ever share state
        $this->context = $context ?? new Context($this->headerSearchPaths);
        //$this->context->defineInt('G_OS_WIN32', 1);
        //$this->context->defineInt('__GLIB_H_INSIDE__', 1);// because not #define assumed
        $this->context->defineString('G_BEGIN_DECLS', 'extern "C" {');
        $this->context->defineString('G_END_DECLS', '}');
        $this->context->defineIdentifier('guint', 'int');


        $preprocessor = new PreProcessor($this->context);
        $tokens = $preprocessor->process($filename);
        return $this->parser->parse($tokens, $this->context);
    }

    public function getLastContext(): Context {
        return $this->context;
    }

    public function addSearchPath(string $path) {
        $this->headerSearchPaths[] = rtrim($path, '/');
    }

}
