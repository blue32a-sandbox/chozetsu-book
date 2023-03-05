<?php

namespace Chozetsu\Ch08\Observer;

trait NotifiableTrait
{
    protected $observersMap = [];

    public function addObserver(string $eventKey, callable $observer): void
    {
        $this->observersMap[$eventKey][] = $observer;
    }

    protected function notify(string $eventKey, mixed $data): void
    {
        $observers = $this->observersMap[$eventKey];
        foreach ($observers as $observer) {
            $observer($data);
        }
    }
}
