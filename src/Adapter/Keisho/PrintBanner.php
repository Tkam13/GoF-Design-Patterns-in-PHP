<?php

declare(strict_types=1);

namespace Src\Adapter\Keisho;

class PrintBanner extends Banner implements PrintIntarface
{
    public function printWeak(): void
    {
        $this->showWithParen();
    }

    public function printStrong(): void
    {
        $this->showWithAster();
    }
}
