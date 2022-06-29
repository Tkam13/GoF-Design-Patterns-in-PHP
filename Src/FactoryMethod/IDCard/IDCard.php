<?php

declare(strict_types=1);

namespace Src\FactoryMethod\IDCard;

use Src\FactoryMethod\FrameWork\Product;

class IDCard extends Product
{
    public function __construct(private string $owner)
    {
        echo $this->owner.'のカードを作ります。'.PHP_EOL;
    }

    public function use(): void
    {
        echo $this->owner.'のカードを使います。'.PHP_EOL;
    }

    public function __toString()
    {
        return '[IDCard:'.$this->owner.']';
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}
