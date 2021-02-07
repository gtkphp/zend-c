<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Stmt;

use Zend\C\Engine\Node\DeclGroup;
use Zend\C\Engine\Node\Stmt;

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
