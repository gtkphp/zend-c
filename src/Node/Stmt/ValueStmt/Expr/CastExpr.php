<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt\ValueStmt\Expr;

use Zend\C\Node\Stmt\ValueStmt\Expr;
use Zend\C\Node\Type;

class CastExpr extends Expr
{
    public $expr;
    public $type;

    public function __construct(Expr $expr, TypeRefExpr $type, array $attributes = []) {
        parent::__construct($attributes);
        $this->expr = $expr;
        $this->type = $type;
    }

    public function getSubNodeNames(): array {
        return ['expr', 'type'];
    }

    public function isConstant(): bool {
        return $this->expr->isConstant();
    }

}
