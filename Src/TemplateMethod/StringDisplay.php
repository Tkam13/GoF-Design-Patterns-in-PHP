<?php

declare(strict_types=1);

namespace Src\TemplateMethod;

class StringDisplay extends AbstractDisplay
{
    private int $width;

    public function __construct(private string $string)
    {
        $this->width = \strlen($string);
    }

    public function open(): void
    {
        $this->printLine();
    }

    public function print(): void
    {
        echo '|'.$this->string.'|'.PHP_EOL;
    }

    public function close(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo '+';
        for ($i = 0; $i < $this->width; ++$i) {
            echo '-';
        }
        echo '+'.PHP_EOL;
    }
}
