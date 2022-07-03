<?php

declare(strict_types=1);

namespace Src\Builder;

interface Builder
{
    public function makeTitle(string $title): void;

    public function makeString(string $string): void;

    /**
     * @param array<string> $items
     */
    public function makeItems(array $items): void;

    public function close(): void;
}
