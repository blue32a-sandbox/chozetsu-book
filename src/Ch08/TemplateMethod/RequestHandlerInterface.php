<?php

namespace Chozetsu\Ch08\TemplateMethod;

interface RequestHandlerInterface
{
    public function handle(Request $request): Response;
}
