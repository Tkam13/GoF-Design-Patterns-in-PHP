<?php

declare(strict_types=1);

namespace Src\Template;

class CharDisplay extends AbstractDisplay
{
    public function __construct(private string $ch)
    {
    }

    public function open(): void
    {
        echo '<<';
    }

    public function print(): void
    {
        echo $this->ch;
    }

    public function close(): void
    {
        echo '>>'.PHP_EOL;
    }
}
