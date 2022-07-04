<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factory;

use Exception;

abstract class Factory
{
    public static function getFactory(string $className): object|null
    {
        $factory = null;

        try {
            $factory = new $className();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $factory;
    }

    abstract public function createLink(string $caption, string $url): Link;

    abstract public function createTray(string $caption): Tray;

    abstract public function createPage(string $title, string $author): Page;
}
