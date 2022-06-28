<?php

declare(strict_types=1);

namespace Src\Adapter\Keisho;

interface PrintIntarface
{
    public function printWeak(): void;

    public function printStrong(): void;
}
