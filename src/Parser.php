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

    public function __construct(Context $context=Null) {
        $this->parser = new \Zend\C\Engine\Parser(new Lexer);
        $this->context = $context ?? new Context();
    }

    public function parse(string $filename, ?Context $context = null): TranslationUnitDecl {
        $preprocessor = new PreProcessor($this->context);
        $tokens = $preprocessor->process($filename);
        return $this->parser->parse($tokens, $this->context);
    }

    public function getLastContext(): Context {
        return $this->context;
    }
}
