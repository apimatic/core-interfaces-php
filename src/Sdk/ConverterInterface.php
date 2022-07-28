<?php

namespace CoreDesign\Sdk;

use CoreDesign\Core\ContextInterface;
use CoreDesign\Core\CoreExceptionInterface;
use CoreDesign\Core\Request\RequestInterface;
use CoreDesign\Core\Response\ResponseInterface;

interface ConverterInterface
{
    public function createApiException(string $message, RequestInterface $request, ?ResponseInterface $response);
    public function createHttpContext(ContextInterface $context);
    public function createHttpRequest(RequestInterface $request);
    public function createHttpResponse(ResponseInterface $response);
    public function createApiResponse(ContextInterface $context, $deserializedBody);
}