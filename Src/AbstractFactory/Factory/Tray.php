<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factory;

abstract class Tray extends Item
{
    /** @var array<Item> */
    protected array $tray = [];

    public function __construct(protected string $caption)
    {
    }

    public function add(Item $item): void
    {
        $this->tray[] = $item;
    }
}
