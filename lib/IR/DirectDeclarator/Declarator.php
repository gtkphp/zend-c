<?php declare(strict_types=1);

namespace Zend\C\Engine\IR\DirectDeclarator;

use Zend\C\Engine\IR\DirectDeclarator;
use Zend\C\Engine\IR\Declarator as CoreDeclarator;

class Declarator extends DirectDeclarator
{
    public $declarator;

    public function __construct(CoreDeclarator $declarator, array $attributes = []) {
        parent::__construct($attributes);
        $this->declarator = $declarator;
    }
}
