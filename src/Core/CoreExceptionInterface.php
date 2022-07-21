<?php

namespace CoreDesign\Core;

interface CoreExceptionInterface extends \Throwable
{
    public function getContext(): ContextInterface;
}