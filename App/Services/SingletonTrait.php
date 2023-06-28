<?php

namespace App\Services;

trait SingletonTrait
{
    private static array $instances = [];

    private function __construct() {}

    public static function init()
    {
        if (!isset(self::$instances[static::class])) {
            self::$instances[static::class] = new static;
        }

        return self::$instances[static::class];
    }
}
