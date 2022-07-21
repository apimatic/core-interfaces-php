<?php

namespace CoreDesign\Sdk;

use CoreDesign\Core\ContextInterface;
use CoreDesign\Core\CoreExceptionInterface;
use CoreDesign\Core\CoreResponseInterface;
use CoreDesign\Core\RequestInterface;
use CoreDesign\Core\ResponseInterface;

interface ConverterInterface
{
    /**
     * @param CoreExceptionInterface $exception
     * @return mixed
     */
    public function createApiException(CoreExceptionInterface $exception);
    public function createHttpContext(ContextInterface $context);
    public function createHttpRequest(RequestInterface $request);
    public function createHttpResponse(ResponseInterface $response);
    public function createApiResponse(CoreResponseInterface $coreResponse);
}