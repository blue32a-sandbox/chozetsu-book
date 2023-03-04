<?php

namespace Chozetsu\Ch08\Command\UI;

use Chozetsu\Ch08\Command\Common\CommandInterface;

class SelectionItem
{
    public function __construct(
        public string $label,
        public CommandInterface $command
    ) { }
}
