<?php

declare(strict_types=1);

namespace Src\FactoryMethod\FrameWork;

abstract class Product
{
    abstract public function use(): void;

    abstract public function __toString(): string;
}
