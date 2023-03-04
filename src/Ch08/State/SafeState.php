<?php

namespace Chozetsu\Ch08\State;

class SafeState extends SpeedMeterState
{
    use SingletonTrait;

    public function nextState(float $speed): SpeedMeterState
    {
        return $speed > 100.0 ? DangerState::getInstance() : $this;
    }

    public function getColor(): string
    {
        return 'green';
    }
}
