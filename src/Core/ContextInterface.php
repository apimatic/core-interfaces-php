<?php

namespace CoreDesign\Core;

use CoreDesign\Core\Request\RequestInterface;
use CoreDesign\Core\Response\ResponseInterface;

interface ContextInterface
{
    /**
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface;

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface;
}