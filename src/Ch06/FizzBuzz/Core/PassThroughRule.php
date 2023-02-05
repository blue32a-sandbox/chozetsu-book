<?php

namespace Chozetsu\Ch06\FizzBuzz\Core;

class PassThroughRule implements ReplaceRuleInterface
{
    public function apply(string $carry, int $n): string
    {
        return (string) $n;
    }

    public function match(string $carry, int $n): bool
    {
        return $carry == '';
    }
}
