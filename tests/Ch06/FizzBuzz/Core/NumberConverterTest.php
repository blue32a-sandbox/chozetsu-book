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
                expectedCarry: "",
                matchResult: true,
                replacement: 'Replaced'
            )
        ]);
        $this->assertEquals("Replaced", $fizzBuzz->convert(1));
    }

    public function testConvertCompositingRuleResults(): void
    {
        $fizzBuzz = new NumberConverter([
            $this->createMockRule(
                expectedNumber: 1,
                expectedCarry: "",
                matchResult: true,
                replacement: "Fizz"
            ),
            $this->createMockRule(
                expectedNumber: 1,
                expectedCarry: "Fizz",
                matchResult: true,
                replacement: "FizzBuzz"
            ),
        ]);
        $this->assertEquals("FizzBuzz", $fizzBuzz->convert(1));
    }

    public function testConvertSkippingUnmatchedRules(): void
    {
        $fizzBuzz = new NumberConverter([
            $this->createMockRule(
                expectedNumber: 1,
                expectedCarry: "",
                matchResult: false,
                replacement: "Fizz"
            ),
            $this->createMockRule(
                expectedNumber: 1,
                expectedCarry: "",
                matchResult: false,
                replacement: "Buzz"
            ),
            $this->createMockRule(
                expectedNumber: 1,
                expectedCarry: "",
                matchResult: true,
                replacement: "1"
            ),
        ]);
        $this->assertEquals("1", $fizzBuzz->convert(1));
    }

    private function createMockRule(
        int $expectedNumber,
        string $expectedCarry,
        bool $matchResult,
        string $replacement
    ): ReplaceRuleInterface {
        $rule = $this->createMock(ReplaceRuleInterface::class);

        $rule->expects($this->any())
            ->method('apply')
            ->with($expectedCarry, $expectedNumber)
            ->willReturn($replacement);

        $rule->expects($this->atLeastOnce())
            ->method('match')
            ->with($expectedCarry, $expectedNumber)
            ->willReturn($matchResult);

        return $rule;
    }
}
