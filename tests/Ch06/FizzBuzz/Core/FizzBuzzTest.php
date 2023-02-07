<?php

namespace Tests\Ch06\FizzBuzz\Core;

use Chozetsu\Ch06\FizzBuzz\Core\NumberConverter;
use Chozetsu\Ch06\FizzBuzz\Spec\CyclicNumberRule;
use Chozetsu\Ch06\FizzBuzz\Spec\PassThroughRule;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz(): void
    {
        $fizzBuzz = new NumberConverter([
            new CyclicNumberRule(3, "Fizz"),
            new CyclicNumberRule(5, "Buzz"),
            new PassThroughRule(),
        ]);
        $this->assertEquals("1", $fizzBuzz->convert(1));
        $this->assertEquals("2", $fizzBuzz->convert(2));
        $this->assertEquals("Fizz", $fizzBuzz->convert(3));
        $this->assertEquals("Buzz", $fizzBuzz->convert(5));
        $this->assertEquals("Fizz", $fizzBuzz->convert(6));
        $this->assertEquals("Buzz", $fizzBuzz->convert(10));
        $this->assertEquals("FizzBuzz", $fizzBuzz->convert(15));
    }
}
