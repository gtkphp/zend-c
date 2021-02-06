<?php declare(strict_types=1);

namespace Zend\C\IR\DirectDeclarator;

use Zend\C\IR\DirectDeclarator;

class Identifier extends DirectDeclarator
{
    public $name;

    public function __construct(string $name, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
    }
}
