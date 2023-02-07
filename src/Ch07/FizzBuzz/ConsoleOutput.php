<?php

namespace Chozetsu\Ch07\FizzBuzz;

use Chozetsu\Ch07\FizzBuzz\App\OutputInterface;

class ConsoleOutput implements OutputInterface
{
    public function write(string $data): void
    {
        echo $data;
    }
}
