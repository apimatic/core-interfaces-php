<?php

namespace CoreDesign\Sdk;

use CoreDesign\Core\ContextInterface;
use CoreDesign\Core\CoreExceptionInterface;
use CoreDesign\Core\RequestInterface;
use CoreDesign\Core\ResponseInterface;

interface ConverterInterface
{
    public function createApiException(CoreExceptionInterface $exception);
    public function createHttpContext(ContextInterface $context);
    public function createHttpRequest(RequestInterface $request);
    public function createHttpResponse(ResponseInterface $response);
    public function createApiResponse(ContextInterface $context, $deserializedBody);
}