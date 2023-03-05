<?php

namespace Chozetsu\Ch08\Observer;

class LoggerObserver
{
    public function __construct(
        protected LoggerInterface $logger
    ) { }

    public function watch(ObservableInterface $target, string $eventKey): void
    {
        $target->addObserver($eventKey, function ($data) use ($eventKey) {
            $this->logger->info($eventKey . ": " . json_encode($data));
        });
    }
}
