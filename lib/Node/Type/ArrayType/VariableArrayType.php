<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Type\ArrayType;

use Zend\C\Engine\Node\Type\ArrayType;
use Zend\C\Engine\Node\Type;
use Zend\C\Engine\Node\Stmt\ValueStmt\Expr;

class VariableArrayType extends ArrayType
{
    public $parent;
    public $size;

    public function __construct(Type $parent, Expr $size, array $attributes = []) {
        parent::__construct($attributes);
        $this->parent = $parent;
        $this->size = $size;
    }

    public function getSubNodeNames(): array {
        return ['parent', 'size'];
    }

}
