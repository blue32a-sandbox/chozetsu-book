<?php

namespace Chozetsu\Ch08\Strategy;

use InvalidArgumentException;
use LogicException;

class Expression implements ExpressionInterface
{
    protected ?array $vars = null;
    protected ?CalcurationStrategyInterface $calcurationStrategy = null;

    public function setCalcurationStrategy(
        CalcurationStrategyInterface $strategy
    ): void {
        $this->calcurationStrategy = $strategy;
    }

    public function setVariables(array $vars): void {
        if ($this->calcurationStrategy->validate($vars)) {
            throw new InvalidArgumentException();
        }
        $this->vars = $vars;
    }

    public function evaluate(): float
    {
        if ($this->vars === null || $this->calcurationStrategy === null) {
            throw new LogicException();
        }
        return $this->calcurationStrategy->calcurate($this->vars);
    }
}
