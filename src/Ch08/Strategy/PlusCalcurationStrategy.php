<?php

namespace Chozetsu\Ch08\Strategy;

class PlusCalcurationStrategy implements CalcurationStrategyInterface
{
    public function validate(array $vars): bool
    {
        return count($vars) === 2;
    }

    public function calcurate(array $vars): float
    {
        return $vars[0] + $vars[1];
    }
}
