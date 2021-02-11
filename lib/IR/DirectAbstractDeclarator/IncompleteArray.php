<?php declare(strict_types=1);

namespace Zend\C\Engine\IR\DirectAbstractDeclarator;

use Zend\C\Engine\IR\DirectAbstractDeclarator;

class IncompleteArray extends DirectAbstractDeclarator
{
    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
    }
}
