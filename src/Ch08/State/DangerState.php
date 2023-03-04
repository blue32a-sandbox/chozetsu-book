<?php

namespace Chozetsu\Ch08\State;

class DangerState extends SpeedMeterState
{
    use SingletonTrait;

    public function nextState(float $speed): SpeedMeterState
    {
        return $speed <= 80.0 ? SafeState::getInstance() : $this;
    }

    public function getColor(): string
    {
        return 'red';
    }
}
