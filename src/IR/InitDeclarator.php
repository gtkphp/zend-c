<?php declare(strict_types=1);

namespace Zend\C\IR;

use Zend\C\IR;
use Zend\C\Node;

class InitDeclarator extends IR
{
    public $declarator;
    public $initializer;

    public function __construct(Declarator $declarator, ?Node\Stmt $initializer, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
        $this->initializer = $initializer;
    }
}
