<?php

namespace CoreDesign\Core\Request;

interface RequestSetterInterface extends RequestInterface
{
    public function addQuery(string $key, $value, string $arrayFormat = RequestArraySerialization::INDEXED): void;
    public function addTemplate(string $key, $value, bool $encode = true): void;
    public function addHeader(string $key, $value): void;
    public function addFormParam(string $key, $value, string $arrayFormat = RequestArraySerialization::INDEXED): void;
    public function addBodyParam(string $key, $value, bool $wrapInObject = true): void;
    public function setRetryOption(string $retryOption): void;
}
