<?php

declare(strict_types=1);

namespace Src\Singleton;

class Singleton
{
    private static self $singleton;

    private function __construct()
    {
        echo 'インスタンスを生成しました。';
    }

    public static function getInstance(): self
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new self();
        }

        return self::$singleton;
    }
}
