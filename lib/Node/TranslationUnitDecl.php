<?php declare(strict_types=1);

namespace Zend\C\Engine\Node;

class TranslationUnitDecl extends DeclContext
{

    public function getType(): string {
        return 'TranslationUnitDecl';
    }

    
}