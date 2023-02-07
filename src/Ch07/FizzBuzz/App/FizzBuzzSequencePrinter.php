<?php

namespace Chozetsu\Ch07\FizzBuzz\App;

use Chozetsu\Ch07\FizzBuzz\Core\NumberConverter;
use Chozetsu\Ch07\FizzBuzz\Spec\CyclicNumberRule;
use Chozetsu\Ch07\FizzBuzz\Spec\PassThroughRule;

class FizzBuzzSequencePrinter
{
    public function printRange(int $begin, int $end): void
    {
        $fizzBuzz = new NumberConverter([
            new CyclicNumberRule(3, 'Fizz'),
            new CyclicNumberRule(5, 'Buzz'),
            new PassThroughRule(),
        ]);
        for ($i = $begin; $i <= $end; $i++) {
            printf("%d %s\n", $i, $fizzBuzz->convert($i));
        }
    }
}
