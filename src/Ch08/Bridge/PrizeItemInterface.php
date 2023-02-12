<?php

namespace Chozetsu\Ch08\Bridge;

interface PrizeItemInterface
{
    public function getMaterial(): Material;
    public function getShape(): Shape;
}
