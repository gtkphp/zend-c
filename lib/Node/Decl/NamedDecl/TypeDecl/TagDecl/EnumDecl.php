<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Decl\NamedDecl\TypeDecl\TagDecl;

use Zend\C\Engine\Node\Decl\NamedDecl\TypeDecl\TagDecl;

use Zend\C\Engine\Node\Type;

class EnumDecl extends TagDecl
{

    public $name;
    public $fields;

    public function __construct(?string $name, ?array $fields, array $attributes = []) {
        parent::__construct($attributes);
        $this->name = $name;
        $this->fields = $fields;
    }

    public function getSubNodeNames(): array {
        return ['name', 'fields'];
    }

}
