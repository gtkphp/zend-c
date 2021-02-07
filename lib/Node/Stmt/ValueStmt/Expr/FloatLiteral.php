<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Stmt\ValueStmt\Expr;

use Zend\C\Engine\Node\Stmt\ValueStmt\Expr;

class FloatLiteral extends Expr
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
