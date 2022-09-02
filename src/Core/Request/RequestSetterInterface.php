<?php

namespace CoreDesign\Core\Request;

interface RequestSetterInterface extends RequestInterface
{
    public function setHttpMethod(string $requestMethod): void;
    public function appendPath(string $path): void;
    public function addTemplate(string $key, $value): void;
    public function addHeader(string $key, $value): void;
    public function addFormParam(string $key, $value, $realValue = null): void;
    public function addBodyParam($value, string $key = ''): void;
    public function setBodyFormat(string $format, callable $serializer): void;
    public function setRetryOption(string $retryOption): void;
}
