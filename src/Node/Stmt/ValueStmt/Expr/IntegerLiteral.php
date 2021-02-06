<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt\ValueStmt\Expr;

use Zend\C\Node\Stmt\ValueStmt\Expr;

class IntegerLiteral extends Expr
{
    public $value;

    public function __construct(string $value, array $attributes = []) {
        parent::__construct($attributes);
        $this->value = $value;
    }

    public function getSubNodeNames(): array {
        return ['value'];
    }

    public function isConstant(): bool {
        return true;
    }
}
