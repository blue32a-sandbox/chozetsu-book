<?php

namespace Chozetsu\Ch08\Bridge;

class PrizeShapeCup extends PrizeShape
{
    public function get(): Shape
    {
        return new Shape();
    }
}
