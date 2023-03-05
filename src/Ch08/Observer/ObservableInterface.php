<?php

namespace Chozetsu\Ch08\Observer;

interface ObservableInterface
{
    public function addObserver(string $eventkey, callable $observer): void;
}

