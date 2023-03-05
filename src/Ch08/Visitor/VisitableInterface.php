<?php

namespace Chozetsu\Ch08\Visitor;

interface VisitableInterface
{
    public function accept(callable $visitor): void;
}
