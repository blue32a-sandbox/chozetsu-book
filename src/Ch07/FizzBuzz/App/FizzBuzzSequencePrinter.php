<?php

namespace Chozetsu\Ch07\FizzBuzz\App;

use Chozetsu\Ch07\FizzBuzz\Core\NumberConverter;

class FizzBuzzSequencePrinter
{
    public function __construct(
        protected NumberConverter $fizzBuzz,
        protected OutputInterface $output
    ) { }

    public function printRange(int $begin, int $end): void
    {
        for ($i = $begin; $i <= $end; $i++) {
            $text = $this->fizzBuzz->convert($i);
            $formattedText = sprintf("%d %s\n", $i, $text);
            $this->output->write($formattedText);
        }
    }
}
