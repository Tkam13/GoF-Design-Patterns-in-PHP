<?php

declare(strict_types=1);

namespace Src\Iterator;

interface AggregateInterface
{
    public function iterator(): IteratorInterface;
}
