<?php declare(strict_types=1);

namespace Zend\C\Engine\IR\DirectDeclarator;

use Zend\C\Engine\IR\DirectDeclarator;

class Identifier extends DirectDeclarator
{
    public $name;

    public function __construct(string $name, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
    }
}
