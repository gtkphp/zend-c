<?php declare(strict_types=1);

namespace Zend\C\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl;

use Zend\C\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl;

use Zend\C\Node\Type;
use Zend\C\Node\Stmt;

class VarDecl extends DeclaratorDecl
{

    public $name;
    public $type;
    public $initializer;

    public function __construct(?string $name, Type $type, ?Node\Stmt $initializer, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
        $this->type = $type;
        $this->initializer = $initializer;
    }

    public function getSubNodeNames(): array {
        return ['name', 'type', 'initializer'];
    }

}
