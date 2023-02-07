<?php

namespace Tests\Ch07\FizzBuzz\App;

use Chozetsu\Ch07\FizzBuzz\App\FizzBuzzSequencePrinter;
use Chozetsu\Ch07\FizzBuzz\App\OutputInterface;
use Chozetsu\Ch07\FizzBuzz\Core\NumberConverter;
use PHPUnit\Framework\TestCase;

class FizzBuzzSequencePrinterTest extends TestCase
{
    public function testPrintNone(): void
    {
        $converter = $this->createMock(NumberConverter::class);
        $converter
            ->expects($this->never())
            ->method('convert');

        $output = $this->createMock(OutputInterface::class);
        $output
            ->expects($this->never())
            ->method('write');

        $printer = new FizzBuzzSequencePrinter($converter, $output);
        $printer->printRange(0, -1);
    }

    public function testPrintTo3(): void
    {
        $converter = $this->createMock(NumberConverter::class);
        $converter
            ->expects($this->exactly(3))
            ->method('convert')
            ->will($this->returnValueMap([[1, '1'], [2, '2'], [3, 'Fizz']]));

        $output = $this->createMock(OutputInterface::class);
        $output
            ->expects($this->exactly(3))
            ->method('write')
            ->withConsecutive(["1 1\n"], ["2 2\n"], ["3 Fizz\n"]);

        $printer = new FizzBuzzSequencePrinter($converter, $output);
        $printer->printRange(1, 3);
    }
}
