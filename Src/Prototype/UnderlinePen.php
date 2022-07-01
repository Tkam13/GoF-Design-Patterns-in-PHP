<?php

declare(strict_types=1);

namespace Src\Prototype;

use Src\Prototype\FrameWork\Product;

class UnderlinePen implements Product
{
    public function __construct(private string $ulChar)
    {
    }

    public function use(string $string): void
    {
        $ulen = mb_strlen($string);
        echo $string.PHP_EOL;
        $this->printUnderline($ulen);
    }

    public function createCopy(): Product
    {
        return clone $this;
    }

    private function printUnderline(int $ulen): void
    {
        for ($i = 0; $i < $ulen; ++$i) {
            echo $this->ulChar;
        }
        echo PHP_EOL;
    }
}
