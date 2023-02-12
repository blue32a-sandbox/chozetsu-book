<?php

namespace Chozetsu\Ch08\Bridge;

class PrizeMaterialSilver extends PrizeMaterial
{
    public function get(): Material
    {
        return new Material();
    }
}
