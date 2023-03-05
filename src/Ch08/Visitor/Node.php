<?php

namespace Chozetsu\Ch08\Visitor;

class Node implements VisitableInterface
{
    public function __construct(
        public string $name
    ) { }

    public function accept(callable $visitor): void
    {
        $visitor($this);
    }
}
