<?php

namespace Chozetsu\Ch06\FizzBuzz\Core;

class PassThroughRule implements ReplaceRuleInterface
{
    public function __construct(
        private array $exceptionalNumbers
    ) { }

    public function replace(int $n): string
    {
        foreach ($this->exceptionalNumbers as $exceptionalNumber) {
            if ($n % $exceptionalNumber == 0) {
                return "";
            }
        }

        return (string) $n;
    }
}
