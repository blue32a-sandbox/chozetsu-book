<?php

namespace Chozetsu\Ch08\TemplateMethod;

abstract class AbstractCheckedHandler implements RequestHandlerInterface
{
    public function handle(Request $request): Response
    {
        if (
            $this->checkCommonly($request)
            && $this->checkExternally($request)
        ) {
            $request = $this->preProcessRequest($request);
            $response = $this->requestToResponse($request);
            return $this->postProcessResponse($response);
        } else {
            return new ErrorResponse();
        }
    }

    private function checkCommonly(Request $request): bool
    {
        // TODO
        return true;
    }

    abstract protected function checkExternally(Request $request): bool;

    private function preProcessRequest(Request $request): Request
    {
        // TODO
        return $request;
    }

    abstract protected function requestToResponse(Request $request): Response;

    private function postProcessResponse(Response $response): Response
    {
        // TODO
        return $response;
    }
}
