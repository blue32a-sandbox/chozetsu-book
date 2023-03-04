<?php

namespace Chozetsu\Ch08\State;

abstract class SpeedMeterState
{
    abstract public function nextState(float $speed): SpeedMeterState;
    abstract public function getColor(): string;
}
