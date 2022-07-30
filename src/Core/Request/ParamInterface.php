<?php

namespace CoreDesign\Core\Request;

use InvalidArgumentException;

interface ParamInterface
{
    public function required();
    public function serializeBy(callable $serializerMethod);
    /**
     * @param string   $strictType        Strict single type i.e. string, ModelName, etc. or group of types
     *                                    in string format i.e. oneof(...), anyof(...)
     * @param string[] $serializerMethods Methods required for the serialization of specific types in
     *                                    in the provided strict types/type, should be an array in the format:
     *                                    ['path/to/method argumentType', ...]. Default: []
     */
    public function strictType(string $strictType, array $serializerMethods = []);
    /**
     * @throws InvalidArgumentException
     */
    public function validate(): void;
    public function apply(RequestSetterInterface $request): void;
}