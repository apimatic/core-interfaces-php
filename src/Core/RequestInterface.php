<?php

namespace CoreDesign\Core;

interface RequestInterface
{
    /**
     * @return string
     */
    public function getHttpMethod(): string;

    /**
     * @return array<string,mixed>
     */
    public function getHeaders(): array;

    /**
     * @return string
     */
    public function getQueryUrl(): string;

    /**
     * @return array<string,mixed>
     */
    public function getParameters(): array;

    /**
     * @return mixed
     */
    public function getBody();

}