<?php

declare(strict_types=1);

namespace Src\Adapter\Ijo;

abstract class PrintBase
{
    abstract public function printWeak(): void;

    abstract public function printStrong(): void;
}
