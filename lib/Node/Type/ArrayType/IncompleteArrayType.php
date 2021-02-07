<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Type\ArrayType;

use Zend\C\Engine\Node\Type\ArrayType;
use Zend\C\Engine\Node\Type;

class IncompleteArrayType extends ArrayType
{
    public $parent;

    public function __construct(Type $parent, array $attributes = []) {
        parent::__construct($attributes);
        $this->parent = $parent;
    }

    public function getSubNodeNames(): array {
        return ['parent'];
    }

    public function getType(): string {
        return 'Type_ArrayType_IncompleteArrayType';
    }
}
