<?php

namespace Chozetsu\Ch07\FizzBuzz;

class App
{
    public static function main(): void
    {
        $factory = new FizzBuzzAppFactory();
        $printer = $factory->create();
        $printer->printRange(1, 100);
    }
}
