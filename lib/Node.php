<?php declare(strict_types=1);
namespace Zend\C\Engine;

interface Node
{
    public function getSubNodeNames(): array;
    public function getType(): string;
}