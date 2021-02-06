<?php declare(strict_types=1);

namespace Zend\C\IR\DirectDeclarator;

use Zend\C\IR\DirectDeclarator;
use Zend\C\Node\Stmt\ValueStmt\Expr;

class CompleteArray extends DirectDeclarator
{
    public $declarator;
    public $size;

    public function __construct(DirectDeclarator $declarator, Expr $size, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
        $this->size = $size;
    }
}
