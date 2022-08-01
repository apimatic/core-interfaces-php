<?php

namespace CoreDesign\Core;

interface BodyMatchMode
{
    public const NONE = 'none';
    public const NATIVE = 'native';
    public const KEYS = 'keys';
    public const KEYS_AND_VALUES = 'keysAndValues';
    public const RAW = 'raw';
}