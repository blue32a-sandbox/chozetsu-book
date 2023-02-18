<?php

namespace Chozetsu\Ch08\Mediator;

class ObjectB
{
    public function __construct(
        protected MediatorInterfaceB $mediator
    ) { }

    public function doTask(): void
    {
        $this->mediator->notifyTaskCompletion();
    }
}
