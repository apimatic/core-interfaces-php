<?php

namespace CoreDesign\Http;

use CoreDesign\Core\RequestInterface;
use CoreDesign\Core\ResponseInterface;

interface HttpClientInterface
{
    /**
     * Sends request and receive response from server.
     *
     * @param RequestInterface $request Request to be sent
     *
     * @return ResponseInterface
     */
    public function execute(RequestInterface $request): ResponseInterface;
}