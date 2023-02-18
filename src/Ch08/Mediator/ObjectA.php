<?php

namespace Chozetsu\Ch08\Mediator;

class ObjectA
{
    public function __construct(
        protected MediatorInterfaceA $mediator
    ) { }

    public function someActivity(): void
    {
        $this->mediator->notifyActivityDone();
    }

    public function finishTheWork(): void {}
}
