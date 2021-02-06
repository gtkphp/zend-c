<?php declare(strict_types=1);

namespace Zend\C\Node\Type;

use Zend\C\Node\Type;

class TypedefType extends Type
{
    public $name;

    public function __construct(string $name, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
    }

    public function getSubNodeNames(): array {
        return ['name'];
    }

    public function getType(): string {
        return 'Type_TypedefType';
    }
}
