<?php

namespace CoreDesign\Core;

use CoreDesign\Core\Request\RequestInterface;
use CoreDesign\Core\Response\ResponseInterface;

interface ContextInterface
{
    public function getRequest(): RequestInterface;
    public function getResponse(): ResponseInterface;
}
