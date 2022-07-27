<?php

namespace CoreDesign\Core\Request;

use InvalidArgumentException;

interface ParamInterface
{
    public function required();
    public function serializeBy(callable $serializerMethod);
    public function typeGroup(string $typeGroup, array $serializerMethods = []);
    /**
     * @throws InvalidArgumentException
     */
    public function validate(TypeValidatorInterface $validator): void;
    public function apply(RequestSetterInterface $request): void;
}