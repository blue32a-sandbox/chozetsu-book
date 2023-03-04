<?php

namespace Chozetsu\Ch08\Command\UseCase\Command;

use Chozetsu\Ch08\Command\Common\CommandInterface;
use Chozetsu\Ch08\Command\UseCase\Pet;
use Chozetsu\Ch08\Command\UseCase\PetShop;

class BuyPetCommand implements CommandInterface
{
    public function __construct(
        protected PetShop $shop,
        protected Pet $pet
    ) { }

    public function invoke(): void
    {
        echo 'By a pet at shop.';
    }
}
