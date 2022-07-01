<?php

declare(strict_types=1);

namespace Src\Prototype\FrameWork;

interface Product
{
    public function use(string $string): void;

    public function createCopy(): self;
}
