<?php

namespace Chozetsu\Ch08\Observer;

interface LoggerInterface
{
    public function info(string $message): void;
}
