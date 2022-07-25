<?php

namespace CoreDesign\Core\Response;

use CoreDesign\Core\Convertable;

interface ResponseInterface extends Convertable
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
