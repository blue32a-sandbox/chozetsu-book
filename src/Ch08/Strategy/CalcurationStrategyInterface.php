<?php

namespace Chozetsu\Ch08\Strategy;

interface CalcurationStrategyInterface
{
    public function validate(array $vars): bool;
    public function calcurate(array $vars): float;
}
