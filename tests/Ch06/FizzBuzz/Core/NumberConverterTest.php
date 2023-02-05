<?php

namespace Tests\Ch06\FizzBuzz\Core;

use Chozetsu\Ch06\FizzBuzz\Core\NumberConverter;
use Chozetsu\Ch06\FizzBuzz\Core\ReplaceRuleInterface;
use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
    public function testConvertWithEmptyRules(): void
    {
        $fizzBuzz = new NumberConverter([]);
        $this->assertEquals("", $fizzBuzz->convert(1));
    }

    public function testConvertWithSingleRule(): void
    {
        $fizzBuzz = new NumberConverter([
            $this->createMockRule(
                expectedNumber: 1,
                replacement: 'Replaced'
            )
        ]);
        $this->assertEquals("Replaced", $fizzBuzz->convert(1));
    }

    public function testConvertWithFizzBuzzRules(): void
    {
        $fizzBuzz = new NumberConverter([
            $this->createMockRule(
                expectedNumber: 1,
                replacement: "Fizz"
            ),
            $this->createMockRule(
                expectedNumber: 1,
                replacement: "Buzz"
            ),
        ]);
        $this->assertEquals("FizzBuzz", $fizzBuzz->convert(1));
    }

    public function testConvertWithUnmatchedFizzBuzzRulesAndConstantRule(): void
    {
        $fizzBuzz = new NumberConverter([
            $this->createMockRule(
                expectedNumber: 1,
                replacement: ""
            ),
            $this->createMockRule(
                expectedNumber: 1,
                replacement: ""
            ),
            $this->createMockRule(
                expectedNumber: 1,
                replacement: "1"
            ),
        ]);
        $this->assertEquals("1", $fizzBuzz->convert(1));
    }

    private function createMockRule(
        int $expectedNumber,
        string $replacement
    ): ReplaceRuleInterface {
        $rule = $this->createMock(ReplaceRuleInterface::class);
        $rule->expects($this->atLeastOnce())
            ->method('replace')
            ->with($expectedNumber)
            ->willReturn($replacement);
        return $rule;
    }
}
