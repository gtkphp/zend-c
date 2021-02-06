<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt;

use Zend\C\Node\Stmt;
use Zend\C\Node\Stmt\ValueStmt\Expr;

class ReturnStmt extends Stmt
{

    public $result;

    public function __construct(?Expr $result, array $attributes = []) {
        $this->result = $result;
    }

    public function getSubNodeNames(): array {
        return ['result'];
    }
}
