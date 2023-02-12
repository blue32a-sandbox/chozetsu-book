<?php

namespace Chozetsu\Ch08\TemplateMethod;

interface UserAccessCheckerInterface
{
    public function isAllowed($user): bool;
}
