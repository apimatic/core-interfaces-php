<?php

namespace CoreDesign\Core\Request;

use CoreDesign\Core\Format;

interface RequestSetterInterface extends RequestInterface
{
    public function setHttpMethod(string $requestMethod): void;
    public function appendPath(string $path): void;
    public function addTemplate(string $key, $value): void;
    public function addHeader(string $key, $value): void;
    public function addFormParam(string $key, $value, string $encodedBody): void;
    public function addBodyParam($value, ?string $key = null): void;
    public function setBodyAsXml(string $rootName): void;
    public function setBodyAsJson(): void;
    public function setRetryOption(string $retryOption): void;
}
