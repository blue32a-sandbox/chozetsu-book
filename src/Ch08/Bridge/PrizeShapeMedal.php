<?php

namespace Chozetsu\Ch08\Bridge;

class PrizeShapeMedal extends PrizeShape
{
    public function get(): Shape
    {
        return new Shape();
    }
}
