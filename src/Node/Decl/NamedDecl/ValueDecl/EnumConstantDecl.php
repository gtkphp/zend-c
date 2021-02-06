<?php declare(strict_types=1);

namespace Zend\C\Node\Decl\NamedDecl\ValueDecl;

use Zend\C\Node\Decl\ValueDecl;
use Zend\C\Node\Stmt\ValueStmt\Expr;

class EnumConstantDecl extends ValueDecl
{

    public $name;
    public $value;

    public function __construct(string $name, ?Expr $value, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
        $this->value = $value;
    }

    public function getSubNodeNames(): array {
        return ['name', 'value'];
    }
}
