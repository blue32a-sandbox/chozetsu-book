<?php

namespace Chozetsu\Ch06\FizzBuzz\Core;

class CyclicNumberRule implements ReplaceRuleInterface
{
    public function __construct(
        private int $base,
        private string $replacement
    ) { }

    public function replace(int $n): string
    {
        return ($n % $this->base == 0) ? $this->replacement : "";
    }
}
