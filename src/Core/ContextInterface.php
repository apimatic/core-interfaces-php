<?php

namespace CoreDesign\Core;

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