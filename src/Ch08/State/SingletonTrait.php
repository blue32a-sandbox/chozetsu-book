<?php

namespace Chozetsu\Ch08\State;

trait SingletonTrait
{
    private static ?self $thisInstance = null;

    private function __construct() {}

    public static function getInstance(): self
    {
        if (!self::$thisInstance) {
            self::$thisInstance = new self();
        }
        return self::$thisInstance;
    }
}
