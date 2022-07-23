<?php

namespace CoreDesign\Core;

use CoreDesign\Core\Request\RequestInterface;
use CoreDesign\Core\Response\ResponseInterface;

interface CoreExceptionInterface extends \Throwable
{
    /**
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface;

    /**
     * @return ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface;
}