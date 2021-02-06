<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt\ValueStmt\Expr;

use Zend\C\Node\Stmt\ValueStmt\Expr;

class CallExpr extends Expr
{
    public $fn;
    public $args;

    public function __construct(Expr $fn, array $args, array $attributes = []) {
        parent::__construct($attributes);
        $this->fn = $fn;
        $this->args = $args;
    }

    public function getSubNodeNames(): array {
        return ['fn', 'args'];
    }

    public function isConstant(): bool {
        return false;
    }

}
