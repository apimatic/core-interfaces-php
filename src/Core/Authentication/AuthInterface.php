<?php

namespace CoreDesign\Core\Authentication;

use CoreDesign\Core\Request\RequestSetterInterface;
use InvalidArgumentException;

interface AuthInterface
{
    /**
     * @throws InvalidArgumentException
     */
    public function validate(): void;
    public function apply(RequestSetterInterface $request): void;
}
