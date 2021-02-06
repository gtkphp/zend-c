<?php declare(strict_types=1);
namespace Zend\C;

use Zend\C\Node\TranslationUnitDecl;

interface Printer
{

    public function print(TranslationUnitDecl $node): string;

}