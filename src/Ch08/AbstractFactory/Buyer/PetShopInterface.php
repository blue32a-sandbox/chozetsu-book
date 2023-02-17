<?php

namespace Chozetsu\Ch08\AbstractFactory\Buyer;

interface PetShopInterface
{
    public function createPet(string $type): Pet;
}
