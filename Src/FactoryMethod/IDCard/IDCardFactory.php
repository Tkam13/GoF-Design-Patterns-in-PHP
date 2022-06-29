<?php

declare(strict_types=1);

namespace Src\FactoryMethod\IDCard;

use Src\FactoryMethod\FrameWork\Factory;
use Src\FactoryMethod\FrameWork\Product;

class IDCardFactory extends Factory
{
    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void
    {
        echo $product.'を登録しました。'.PHP_EOL;
    }
}
