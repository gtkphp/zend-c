<?php declare(strict_types=1);
namespace Zend\C;

interface Node
{
    public function getSubNodeNames(): array;
    public function getType(): string;
}