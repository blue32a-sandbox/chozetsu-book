<?php

namespace Chozetsu\Ch08\Command\UI;

use Chozetsu\Ch08\Command\Common\CommandInterface;

class SelectionUI
{
    /** @var SelectionItem[] */
    protected array $selectionItems = [];

    public function registerCommand(
        string $label,
        CommandInterface $command
    ): void {
        $this->selectionItems[] = new SelectionItem($label, $command);
    }

    public function help(): string
    {
        $indexedItemList = [];
        foreach ($this->selectionItems as $i => $item) {
            $indexedItemList[] = sprintf('%d: %s', $i + 1, $item->label);
        }
        return implode("\n", $indexedItemList);
    }

    public function select(int $number): void
    {
        $command = $this->selectionItems[$number - 1]->command;
        $command->invoke();
    }
}
