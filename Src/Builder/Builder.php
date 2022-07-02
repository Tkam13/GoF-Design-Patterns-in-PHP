<?php

declare(strict_types=1);

namespace Src\Builder;

abstract class Builder
{
    abstract public function makeTitle(string $title): void;

    abstract public function makeString(string $string): void;

    /**
     * @param array<string> $items
     */
    abstract public function makeItems(array $items): void;

    abstract public function close(): void;
}
