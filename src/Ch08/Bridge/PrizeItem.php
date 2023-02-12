<?php

namespace Chozetsu\Ch08\Bridge;

class PrizeItem implements PrizeItemInterface
{
    public function __construct(
        protected PrizeMaterial $material,
        protected PrizeShape $shape
    ) { }

    public function getMaterial(): Material
    {
        return $this->material->get();
    }

    public function getShape(): Shape
    {
        return $this->shape->get();
    }
}
