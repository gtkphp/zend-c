<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl;

use Zend\C\Engine\Node\Decl\NamedDecl\ValueDecl\DeclaratorDecl;
//use Zend\C\Engine\Node\Stmt\ValueStmt\Expr\IntegerLiteral;


use Zend\C\Engine\Node;
use Zend\C\Engine\Node\Type;
use Zend\C\Engine\Node\Decl;
use Zend\C\Engine\Node\Stmt;

class FieldDecl extends DeclaratorDecl
{

    public $name;
    public $type;
    public $initializer;

    public function __construct(string $name, Type $type, ?Node $initializer, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
        $this->type = $type;
        // instanceof Decl\NamedDecl\ValueDecl\DeclaratorDecl
        // instanceof Stmt\ValueStmt\Expr\IntegerLiteral
        $this->initializer = $initializer;
    }

    public function getSubNodeNames(): array {
        return ['name', 'type', 'initializer'];
    }

    public function getType(): string {
        return 'Decl_NamedDecl_ValueDecl_DeclaratorDecl_FieldDecl';
    }
}
