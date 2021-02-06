<?php declare(strict_types=1);

namespace Zend\C\IR;

use Zend\C\IR;

class StructDeclaration extends IR
{
    public $qualifiers;
    public $types;
    public $declarators;


    public function __construct(int $qualifiers, array $types, ?array $declarators, array $attributes = []) {
        parent::__construct($attributes);
        $this->qualifiers = $qualifiers;
        $this->types = $types;
        $this->declarators = $declarators;
    }
}
