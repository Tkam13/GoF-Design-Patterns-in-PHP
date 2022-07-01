<?php

declare(strict_types=1);

namespace Src\Prototype;

use Src\Prototype\FrameWork\Product;

class MessageBox implements Product
{
    public function __construct(private string $decoChar)
    {
    }

    public function use(string $string): void
    {
        $decoLen = 1 + mb_strlen($string) + 1;
        $this->printDecoChar($decoLen);
        echo $this->decoChar.$string.$this->decoChar.PHP_EOL;
        $this->printDecoChar($decoLen);
    }

    public function createCopy(): Product
    {
        return clone $this;
    }

    private function printDecoChar(int $decoLen): void
    {
        for ($i = 0; $i < $decoLen; ++$i) {
            echo $this->decoChar;
        }
        echo PHP_EOL;
    }
}
