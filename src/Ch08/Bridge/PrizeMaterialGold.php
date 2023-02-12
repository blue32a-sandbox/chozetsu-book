<?php

namespace Chozetsu\Ch08\Bridge;

class PrizeMaterialGold extends PrizeMaterial
{
    public function get(): Material
    {
        return new Material();
    }
}
