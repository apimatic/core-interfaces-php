<?php

namespace CoreDesign\Core\Request;

use CoreDesign\Core\Convertable;

interface RequestInterface extends Convertable
{
    public function getHttpMethod(): string;
    public function getQueryUrl(): string;
    /**
     * @return array<string,mixed>
     */
    public function getHeaders(): array;
    /**
     * @return array<string,mixed>
     */
    public function getParameters(): array;
    public function getBody();
    public function getRetryOption(): string;
}
