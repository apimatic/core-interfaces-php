<?php

namespace CoreDesign\Core;

use CoreDesign\Sdk\ConverterInterface;

interface Convertable
{
    public function convert(ConverterInterface $converter);
}