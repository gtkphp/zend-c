<?php declare(strict_types=1);

namespace Zend\C\IR\DirectAbstractDeclarator;

use Zend\C\IR\DirectAbstractDeclarator;
use Zend\C\IR\AbstractDeclarator as CoreDeclarator;

class AbstractDeclarator extends DirectAbstractDeclarator
{
    public $declarator;

    public function __construct(CoreDeclarator $declarator, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
    }
}
