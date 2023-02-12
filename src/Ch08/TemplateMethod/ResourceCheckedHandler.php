<?php

namespace Chozetsu\Ch08\TemplateMethod;

class ResourceCheckedHandler extends AbstractCheckedHandler
{
    public function __construct(
        private ResponseCheckerInterface $responseChecker
    ) { }

    protected function checkExternally(Request $request): bool
    {
        return $this->responseChecker->isAllowed($request->resource);
    }

    protected function requestToResponse(Request $request): Response
    {
        // TODO
        return new Response();
    }
}
