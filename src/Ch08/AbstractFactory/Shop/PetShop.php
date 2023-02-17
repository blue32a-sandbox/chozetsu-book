<?php

namespace Chozetsu\Ch08\AbstractFactory\Shop;

use Chozetsu\Ch08\AbstractFactory\Buyer\Pet;
use Chozetsu\Ch08\AbstractFactory\Buyer\PetShopInterface;
use InvalidArgumentException;

class CatAndDogOnlyPetShop implements PetShopInterface
{
    public function createPet(string $type): Pet
    {
        return match($type) {
            'cat' => new Cat(),
            'dog' => new Dog(),
            default => throw new InvalidArgumentException()
        };
    }
}
