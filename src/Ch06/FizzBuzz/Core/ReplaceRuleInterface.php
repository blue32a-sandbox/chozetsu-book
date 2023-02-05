<?php

namespace Chozetsu\Ch06\FizzBuzz\Core;

interface ReplaceRuleInterface
{
    public function apply(string $carry, int $n): string;
    public function match(string $carry, int $n): bool;
}
