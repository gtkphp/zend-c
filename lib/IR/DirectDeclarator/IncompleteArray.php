<?php declare(strict_types=1);

namespace Zend\C\Engine\IR\DirectDeclarator;

use Zend\C\Engine\IR\DirectDeclarator;

class IncompleteArray extends DirectDeclarator
{
    public $declarator;

    public function __construct(DirectDeclarator $declarator, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
    }
}
