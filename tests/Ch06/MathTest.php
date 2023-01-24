<?php

use Chozetsu\Ch06\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testMinMax(): void
    {
        $math = new Math();

        $minExpected = 1;
        $minResult = $math->min(1, 2);
        $this->assertEquals($minExpected, $minResult);

        $maxExpected = 2;
        $maxResult = $math->max(1, 2);
        $this->assertEquals($maxExpected, $maxResult);
    }
}
