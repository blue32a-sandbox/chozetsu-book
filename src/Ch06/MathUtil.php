<?php

namespace Chozetsu\Ch06;

class MathUtil
{
    public function __construct(
        protected Math $math
    ) { }

    public function saturate(int $value, int $minValue, int $maxValue): int
    {
        return $this->math->min($this->math->max($value, $minValue), $maxValue);
    }
}
