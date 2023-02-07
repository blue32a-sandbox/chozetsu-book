<?php

namespace Chozetsu\Ch07\FizzBuzz\App;

interface OutputInterface
{
    public function write(string $data): void;
}
