<?php

namespace CoreDesign\Core\Request;

interface RequestInterface
{
    /**
     * @return string
     */
    public function getHttpMethod(): string;

    /**
     * @return string
     */
    public function getQueryUrl(): string;

    /**
     * @param string $queryUrl
     * @return void
     */
    public function setQueryUrl(string $queryUrl): void;

    /**
     * @return array<string,mixed>
     */
    public function getHeaders(): array;

    public function addHeader(string $key, $value): void;

    /**
     * @return array<string,mixed>
     */
    public function getParameters(): array;

    public function addParameter(string $key, $value): void;

    /**
     * @return mixed
     */
    public function getBody();

    public function setBody($body): void;
}
