<?php

declare(strict_types=1);

namespace Src\Iterator;

class Book
{
    public function __construct(private ?string $name = null)
    {
    }

    public function getName(): string|null
    {
        return $this->name;
    }
}
