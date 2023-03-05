<?php

namespace Chozetsu\Ch08\Visitor;

class Branch extends Node
{
    /** @var Node[] */
    protected array $children;

    public function accept(callable $visitor): void
    {
        parent::accept($visitor);

        foreach ($this->children as $child) {
            $child->accept($visitor);
        }
    }

    public function addChild(Node $node): void
    {
        $this->children[] = $node;
    }
}
