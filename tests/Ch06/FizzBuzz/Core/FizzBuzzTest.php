<?php

namespace Tests\Ch06\FizzBuzz\Core;

use Chozetsu\Ch06\FizzBuzz\Core\CyclicNumberRule;
use Chozetsu\Ch06\FizzBuzz\Core\NumberConverter;
use Chozetsu\Ch06\FizzBuzz\Core\PassThroughRule;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz(): void
    {
        $fizzBuzz = new NumberConverter([
            new CyclicNumberRule(3, "Fizz"),
            new CyclicNumberRule(5, "Buzz"),
            new PassThroughRule([3, 5]),
        ]);
        $this->assertEquals("1", $fizzBuzz->convert(1));
        $this->assertEquals("2", $fizzBuzz->convert(2));
        $this->assertEquals("Fizz", $fizzBuzz->convert(3));
    }
}
