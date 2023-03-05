<?php

namespace Chozetsu\Ch08\Observer;

class Logger implements LoggerInterface
{
    public function info(string $message): void
    {
        echo $message;
    }
}
