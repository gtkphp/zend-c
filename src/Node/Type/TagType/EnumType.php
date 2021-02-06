<?php declare(strict_types=1);

namespace Zend\C\Node\Type\TagType;

use Zend\C\Node\Type\TagType;
use Zend\C\Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl;

class EnumType extends TagType
{
    public $decl;

    public function __construct(EnumDecl $decl, array $attributes = []) {
        parent::__construct($attributes);
        $this->decl = $decl;
    }

    public function getSubNodeNames(): array {
        return ['decl'];
    }

}
