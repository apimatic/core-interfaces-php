<?php

namespace CoreDesign\Core\Response;

use CoreDesign\Core\Convertable;

interface ResponseInterface extends Convertable
{
    public function getStatusCode(): int;
    /**
     * @return array<string,mixed>
     */
    public function getHeaders(): array;
    public function getRawBody(): string;
    /**
     * @return mixed
     */
    public function getBody();
}
