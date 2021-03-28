<?php

namespace Core;

use http\Exception\InvalidArgumentException;

class App
{
    protected static array $registry = [];

    public static function bind(string $key, $value): void
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new InvalidArgumentException("No {$key} is bound in the container.");
        }

        return static::$registry[$key];
    }
}