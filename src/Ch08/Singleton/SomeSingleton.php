<?php

namespace Chozetsu\Ch08\Singleton;

class SomeSingleton implements SomeInterface
{
    private static SomeSingleton $theInstance;

    private function __construct() {}

    public static function getInstance(): SomeSingleton
    {
        if (!self::$theInstance) {
            self::$theInstance = new SomeSingleton();
        }
        return self::$theInstance;
    }
}
