<?php

namespace Chozetsu\Ch08\Bridge;

class PrizeMaterialBronze extends PrizeMaterial
{
    public function get(): Material
    {
        return new Material();
    }
}
