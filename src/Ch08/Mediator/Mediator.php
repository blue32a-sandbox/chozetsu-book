<?php

namespace Chozetsu\Ch08\Mediator;

class Mediator implements MediatorInterfaceA, MediatorInterfaceB
{
    public function __construct(
        protected ObjectA $a,
        protected ObjectB $b
    ) { }

    public function notifyActivityDone(): void
    {
        $this->b->doTask();
    }

    public function notifyTaskCompletion(): void
    {
        $this->a->finishTheWork();
    }
}
