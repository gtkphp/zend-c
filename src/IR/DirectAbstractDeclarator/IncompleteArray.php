<?php declare(strict_types=1);

namespace Zend\C\IR\DirectAbstractDeclarator;

use Zend\C\IR\DirectAbstractDeclarator;

class IncompleteArray extends DirectAbstractDeclarator
{
    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
    }
}
