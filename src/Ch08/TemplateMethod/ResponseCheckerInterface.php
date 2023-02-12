<?php

namespace Chozetsu\Ch08\TemplateMethod;

interface ResponseCheckerInterface
{
    public function isAllowed($resource): bool;
}
