<?php

namespace Chozetsu\Ch08\Facade;

class Facade implements FacadeInterface
{
    public function __construct(
        protected FeatureA $a,
        protected FeatureB $b,
        protected FeatureC $c,
    ) { }

    public function sampleAction(): void
    {
        $this->a->complexProcessA();
        $this->b->complexProcessB();
        $this->c->complexProcessC();
    }
}
