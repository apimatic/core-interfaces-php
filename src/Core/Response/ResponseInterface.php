<?php

namespace CoreDesign\Core\Response;

interface ResponseInterface
{
    /**
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * @return array<string,mixed>
     */
    public function getHeaders(): array;

    /**
     * @return string
     */
    public function getRawBody(): string;

    /**
     * @return mixed
     */
    public function getBody();
}
