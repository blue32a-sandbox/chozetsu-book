<?php

namespace Chozetsu\Ch07\FizzBuzz\Core;

interface ReplaceRuleInterface
{
    public function apply(string $carry, int $n): string;
    public function match(string $carry, int $n): bool;
}
