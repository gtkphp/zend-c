<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl\VarDecl;

use Zend\C\Engine\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl\VarDecl;

use Zend\C\Engine\Node\Type;
use Zend\C\Engine\Node\Stmt;

class ParmVarDecl extends VarDecl
{

    public function __construct(?string $name, Type $type, array $attributes = []) {
        parent::__construct($name, $type, null, $attributes);
    }

    public function getSubNodeNames(): array {
        return ['name', 'type'];
    }

}