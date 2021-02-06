<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt\ValueStmt\Expr;

use Zend\C\Node\Stmt\ValueStmt\Expr;
use Zend\C\Node\Type;

class TypeRefExpr extends Expr
{
    public $type;

    public function __construct(Type $type, array $attributes = []) {
        parent::__construct($attributes);
        $this->type = $type;
    }

    public function getSubNodeNames(): array {
        return ['type'];
    }

    public function isConstant(): bool {
        return true;
    }

}
