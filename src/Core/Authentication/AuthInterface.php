<?php

namespace CoreDesign\Core\Authentication;

use CoreDesign\Core\Request\RequestInterface;

interface AuthInterface
{
    public function apply(RequestInterface $request): void;
}