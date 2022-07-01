<?php

declare(strict_types=1);

namespace Src\Prototype\FrameWork;

class Manager
{
    /** @var array<string,Product> */
    private array $showCase;

    public function register(string $name, Product $protoType): void
    {
        $this->showCase[$name] = $protoType;
    }

    public function create(string $protoTypeName): Product
    {
        $product = $this->showCase[$protoTypeName];

        return $product->createCopy();
    }
}
