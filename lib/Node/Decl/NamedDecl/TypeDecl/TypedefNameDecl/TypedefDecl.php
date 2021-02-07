<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Decl\NamedDecl\TypeDecl\TypedefNameDecl;

use Zend\C\Engine\Node\Decl\NamedDecl\TypeDecl\TypedefNameDecl;

use Zend\C\Engine\Node\Type;

class TypedefDecl extends TypedefNameDecl
{

    public $name;
    public $type;

    public function __construct(string $name, Type $type, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
        $this->type = $type;
    }

    public function getSubNodeNames(): array {
        return ['name', 'type'];
    }

    public function getType(): string {
        return 'Decl_NamedDecl_TypeDecl_TypedefNameDecl_TypedefDecl';
    }
}
