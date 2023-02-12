<?php

namespace Chozetsu\Ch08\Bridge;

abstract class PrizeMaterial
{
    abstract public function get(): Material;
}
