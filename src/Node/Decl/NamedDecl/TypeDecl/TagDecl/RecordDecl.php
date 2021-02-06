<?php declare(strict_types=1);

namespace Zend\C\Node\Decl\NamedDecl\TypeDecl\TagDecl;

use Zend\C\Node\Decl\NamedDecl\TypeDecl\TagDecl;

use Zend\C\Node\Type;

class RecordDecl extends TagDecl
{
    const KIND_STRUCT = 1;
    const KIND_UNION = 2;

    public $kind;
    public $name;
    public $fields;

    public function __construct(int $kind, ?string $name, ?array $fields, array $attributes = []) {
        parent::__construct($attributes);
        $this->kind = $kind;
        $this->name = $name;
        $this->fields = $fields;
    }

    public function getSubNodeNames(): array {
        return ['kind', 'name', 'fields'];
    }

    public function getType(): string {
        return 'Decl_NamedDecl_TypeDecl_TagDecl_RecordDecl';
    }
}
