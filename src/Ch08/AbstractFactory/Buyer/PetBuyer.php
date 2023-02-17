<?php

namespace Chozetsu\Ch08\AbstractFactory\Buyer;

use Chozetsu\Ch08\AbstractFactory\Shop\PetShop;

class PetBuyer
{
    public function buyPet(PetShop $petShop, string $type)
    {
        $pet = $petShop->createPet($type);
        $this->buy($pet);
    }

    protected function buy(Pet $pet): void
    {
    }
}
