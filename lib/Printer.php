<?php declare(strict_types=1);
namespace Zend\C\Engine;

use Zend\C\Engine\Node\TranslationUnitDecl;

interface Printer
{

    public function print(TranslationUnitDecl $node): string;

}