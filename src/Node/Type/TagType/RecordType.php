<?php declare(strict_types=1);

namespace Zend\C\Node\Type\TagType;

use Zend\C\Node\Type\TagType;
use Zend\C\Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl;

class RecordType extends TagType
{
    public $decl;

    public function __construct(RecordDecl $decl, array $attributes = []) {
        parent::__construct($attributes);
        $this->decl = $decl;
    }

    public function getSubNodeNames(): array {
        return ['decl'];
    }

}
