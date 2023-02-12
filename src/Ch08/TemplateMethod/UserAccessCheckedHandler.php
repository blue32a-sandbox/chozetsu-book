<?php

namespace Chozetsu\Ch08\TemplateMethod;

class UserAccessCheckedHandler extends AbstractCheckedHandler
{
    public function __construct(
        private UserAccessCheckerInterface $userAccessChecker
    ) { }

    protected function checkExternally(Request $request): bool
    {
        return $this->userAccessChecker->isAllowed($request->user);
    }

    protected function requestToResponse(Request $request): Response
    {
        // TODO
        return new Response();
    }
}
