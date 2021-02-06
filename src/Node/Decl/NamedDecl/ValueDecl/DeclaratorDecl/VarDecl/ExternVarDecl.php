<?php declare(strict_types=1);

namespace Zend\C\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl\VarDecl;

use Zend\C\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl\VarDecl;

use Zend\C\Node\Type;
use Zend\C\Node\Stmt;

class ExternVarDecl extends VarDecl
{

    public function __construct(?string $name, Type $type, array $attributes = []) {
        parent::__construct($name, $type, null, $attributes);
    }

    public function getSubNodeNames(): array {
        return ['name', 'type'];
    }

}