<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factory;

abstract class Link extends Item
{
    public function __construct(protected string $caption, protected string $url)
    {
    }
}
