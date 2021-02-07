<?php declare(strict_types=1);

namespace Zend\C\Engine\IR\DirectAbstractDeclarator;

use Zend\C\Engine\IR\DirectAbstractDeclarator;
use Zend\C\Engine\IR\AbstractDeclarator as CoreDeclarator;

class AbstractDeclarator extends DirectAbstractDeclarator
{
    public $declarator;

    public function __construct(CoreDeclarator $declarator, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
    }
}
