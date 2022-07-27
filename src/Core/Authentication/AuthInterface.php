<?php

namespace CoreDesign\Core\Authentication;

use CoreDesign\Core\Request\RequestSetterInterface;
use CoreDesign\Core\Request\TypeValidatorInterface;
use InvalidArgumentException;

interface AuthInterface
{
    /**
     * @throws InvalidArgumentException
     */
    public function validate(TypeValidatorInterface $validator): void;
    public function apply(RequestSetterInterface $request): void;
}
