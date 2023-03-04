<?php

namespace Tests\Ch08\Command\UI;

use Chozetsu\Ch08\Command\UI\SelectionUI;
use Chozetsu\Ch08\Command\UseCase\Cat;
use Chozetsu\Ch08\Command\UseCase\Command\BuyPetCommand;
use Chozetsu\Ch08\Command\UseCase\Command\CancelBuyingCommand;
use Chozetsu\Ch08\Command\UseCase\Dog;
use Chozetsu\Ch08\Command\UseCase\PetShop;
use PHPUnit\Framework\TestCase;

class SelectionUITest extends TestCase
{
    protected SelectionUI $ui;

    /**
     * @setup
     */
    public function setUp(): void
    {
        $shop = new PetShop();
        $this->ui = new SelectionUI();
        $this->ui->registerCommand('猫をください', new BuyPetCommand($shop, new Cat()));
        $this->ui->registerCommand('犬をください', new BuyPetCommand($shop, new Dog()));
        $this->ui->registerCommand('やっぱりやめます', new CancelBuyingCommand($shop));
    }

    public function testHelp(): void
    {
        $this->assertSame("1: 猫をください\n2: 犬をください\n3: やっぱりやめます", $this->ui->help());
    }

    public function testSelectBuyPet(): void
    {
        $this->expectOutputString('By a pet at shop.');
        $this->ui->select(2);
    }

    public function testSelectCancelBuying(): void
    {
        $this->expectOutputString('Cancel the order of shop.');
        $this->ui->select(3);
    }
}
