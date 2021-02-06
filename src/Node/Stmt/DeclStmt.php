<?php declare(strict_types=1);

namespace Zend\C\Node\Stmt;

use Zend\C\Node\DeclGroup;
use Zend\C\Node\Stmt;

class DeclStmt extends Stmt
{
    public $declarations;

    public function __construct(DeclGroup $declarations, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarations = $declarations;
    }

    public function getSubNodeNames(): array {
        return ['declarations'];
    }

    public function getType(): string {
        return 'Stmt_DeclStmt';
    }
}
