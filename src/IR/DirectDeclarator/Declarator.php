<?php declare(strict_types=1);

namespace Zend\C\IR\DirectDeclarator;

use Zend\C\IR\DirectDeclarator;
use Zend\C\IR\Declarator as CoreDeclarator;

class Declarator extends DirectDeclarator
{
    public $declarator;

    public function __construct(CoreDeclarator $declarator, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
    }
}
