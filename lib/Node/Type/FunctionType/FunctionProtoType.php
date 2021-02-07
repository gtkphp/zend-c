<?php declare(strict_types=1);

namespace Zend\C\Engine\Node\Type\FunctionType;

use Zend\C\Engine\Node\Type\FunctionType;

use Zend\C\Engine\Node\Type;

class FunctionProtoType extends FunctionType
{
    public $return;
    public $params;
    public $paramNames;
    public $isVariadic;

    public function __construct(Type $return, array $params, array $paramNames, bool $isVariadic, array $attributes = []) {
        parent::__construct($attributes);
        $this->return = $return;
        $this->params = $params;
        $this->paramNames = $paramNames;
        $this->isVariadic = $isVariadic;
    }

    public function getSubNodeNames(): array {
        return ['return', 'params', 'paramNames', 'isVariadic'];
    }

}
