<?php

namespace CoreDesign\Core;

use CoreDesign\Core\Request\RequestInterface;
use CoreDesign\Core\Response\ResponseInterface;
use CoreDesign\Sdk\ConverterInterface;

interface ContextInterface extends Convertable
{
    public function getRequest(): RequestInterface;
    public function getResponse(): ResponseInterface;
    public function convertIntoApiResponse($deserializedBody, ConverterInterface $converter);
}