<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factory;

abstract class Item
{
    public function __construct(protected string $caption)
    {
    }

    abstract public function makeHTML(): string;
}
