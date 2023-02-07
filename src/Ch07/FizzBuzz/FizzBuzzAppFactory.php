<?php

namespace Chozetsu\Ch07\FizzBuzz;

use Chozetsu\Ch07\FizzBuzz\App\FizzBuzzSequencePrinter;
use Chozetsu\Ch07\FizzBuzz\App\OutputInterface;
use Chozetsu\Ch07\FizzBuzz\Core\NumberConverter;
use Chozetsu\Ch07\FizzBuzz\Core\ReplaceRuleInterface;
use Chozetsu\Ch07\FizzBuzz\Spec\CyclicNumberRule;
use Chozetsu\Ch07\FizzBuzz\Spec\PassThroughRule;

class FizzBuzzAppFactory
{
    public function create(): FizzBuzzSequencePrinter
    {
        return new FizzBuzzSequencePrinter(
            $this->createFizzBuzz(),
            $this->createOutput()
        );
    }

    protected function createFizzBuzz(): NumberConverter
    {
        return new NumberConverter([
            $this->createFizzRule(),
            $this->createBuzzRule(),
            $this->createPassThroughRule(),
        ]);
    }

    protected function createFizzRule(): ReplaceRuleInterface
    {
        return new CyclicNumberRule(3, "Fizz");
    }

    protected function createBuzzRule(): ReplaceRuleInterface
    {
        return new CyclicNumberRule(5, "Buzz");
    }

    protected function createPassThroughRule(): ReplaceRuleInterface
    {
        return new PassThroughRule();
    }

    protected function createOutput(): OutputInterface
    {
        return new ConsoleOutput();
    }
}
