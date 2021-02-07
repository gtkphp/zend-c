<?php declare(strict_types=1);

namespace Zend\C\Engine\Node;

use Zend\C\Engine\NodeAbstract;

class DeclGroup extends NodeAbstract
{
    public $declarations;

    public function __construct(array $declarations, array $attributes = []) {
        parent::__construct($attributes);
        $this->addDecl(...$declarations);
    }

    public function addDecl(Decl ...$declarations): void {
        foreach ($declarations as $declaration) {
            $this->declarations[] = $declaration;
        }
    }

    public function getSubNodeNames(): array {
        return ['declarations'];
    }

    public function getType(): string {
        return 'DeclGroup';
    }
}
