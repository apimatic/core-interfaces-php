<?php

namespace CoreDesign\Core\Response;

use CoreDesign\Sdk\ConverterInterface;

interface ResponseInterface
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
    public function convert(ConverterInterface $converter);
}
