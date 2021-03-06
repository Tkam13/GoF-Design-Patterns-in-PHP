<?php

declare(strict_types=1);

namespace Src\FactoryMethod\FrameWork;

abstract class Factory
{
    final public function create(string $owner): Product
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);

        return $product;
    }

    abstract protected function createProduct(string $owner): Product;

    abstract protected function registerProduct(Product $product): void;
}
