<?php

declare(strict_types=1);

namespace Src\Adapter\Keisho;

class Banner
{
    public function __construct(private string $string)
    {
    }

    public function showWithParen(): void
    {
        echo '('.$this->string.')', PHP_EOL;
    }

    public function showWithAster(): void
    {
        echo '*'.$this->string.'*', PHP_EOL;
    }
}
