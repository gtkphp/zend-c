<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt;

use Zend\C\Node\Stmt;

class CompoundStmt extends Stmt
{
    public $stmts;

    public function __construct(array $stmts, array $attributes = []) {
        parent::__construct($attributes);
        $this->stmts = $stmts;
    }

    public function getSubNodeNames(): array {
        return ['stmts'];
    }

    public function getType(): string {
        return 'Stmt_CompoundStmt';
    }
}
