<?php declare(strict_types=1);
namespace Zend\C\Engine;

abstract class IR
{
    
    public $attributes;
    
    public function __construct(array $attributes = []) {
        $this->attributes = $attributes;
    }
    
}
