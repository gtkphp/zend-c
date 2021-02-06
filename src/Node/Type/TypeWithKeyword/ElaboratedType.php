<?php declare(strict_types=1);

namespace Zend\C\Node\Type\TypeWithKeyword;

use Zend\C\Node\Type\TypeWithKeyword;
use Zend\C\Node\Type;

class ElaboratedType extends TypeWithKeyword
{
    public $keyword;
    public $type;

    public function __construct(string $keyword, Type $type, array $attributes = []) {
        parent::__construct($attributes);
        $this->keyword = $keyword;
        $this->type = $type;
    }

    public function getSubNodeNames(): array {
        return ['keyword', 'type'];
    }

    public function getType(): string {
        return 'Type_TypeWithKeyword_ElaboratedType';
    }
}
