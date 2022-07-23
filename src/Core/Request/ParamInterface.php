<?php

namespace CoreDesign\Core\Request;

interface ParamInterface
{
    public function required();
    public function serializeBy(callable $serializerMethod);
    public function typeGroup(string $typeGroup, array $serializerMethods = []);
    public function apply(RequestInterface $request);
}