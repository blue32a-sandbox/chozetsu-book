<?php

namespace Chozetsu\Ch06;

class Math
{
    public function min(int $a, int $b): int
    {
        return $a < $b ? $a : $b;
    }

    public function max(int $a, $b): int
    {
        return $a > $b ? $a : $b;
    }
}
