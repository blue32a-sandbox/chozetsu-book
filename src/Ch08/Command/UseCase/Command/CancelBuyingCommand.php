<?php

namespace Chozetsu\Ch08\Command\UseCase\Command;

use Chozetsu\Ch08\Command\Common\CommandInterface;
use Chozetsu\Ch08\Command\UseCase\PetShop;

class CancelBuyingCommand implements CommandInterface
{
    public function __construct(
        protected PetShop $shop
    ) { }

    public function invoke(): void
    {
        echo 'Cancel the order of shop.';
    }
}
