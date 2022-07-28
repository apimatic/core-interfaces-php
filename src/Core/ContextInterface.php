<?php

namespace CoreDesign\Core;

use CoreDesign\Core\Request\RequestInterface;
use CoreDesign\Core\Response\ResponseInterface;

interface ContextInterface
{
    public function getRequest(): RequestInterface;
    public function getResponse(): ResponseInterface;
    public function convert();
    public function convertIntoApiResponse($deserializedBody);
}