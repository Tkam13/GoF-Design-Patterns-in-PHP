<?php

declare(strict_types=1);

namespace Src\Adapter\Ijo;

class PrintBanner extends PrintBase
{
    private Banner $banner;

    public function __construct(string $string)
    {
        $this->banner = new Banner($string);
    }

    public function printWeak(): void
    {
        $this->banner->showWithParen();
    }

    public function printStrong(): void
    {
        $this->banner->showWithAster();
    }
}
