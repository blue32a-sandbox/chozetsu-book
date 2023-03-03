<?php

namespace Chozetsu\Ch08\Strategy;

interface ExpressionInterface
{
    public function setVariables(array $vars): void;
    public function evaluate(): float;
}
