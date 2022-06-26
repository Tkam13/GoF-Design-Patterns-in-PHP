<?php

declare(strict_types=1);

namespace Src\Iterator;

interface IteratorInterface
{
    public function hasNext(): bool;

    public function next(): object;
}
