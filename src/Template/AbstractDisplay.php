<?php

declare(strict_types=1);

namespace Src\Template;

abstract class AbstractDisplay
{
    abstract protected function open(): void;

    abstract protected function print(): void;

    abstract protected function close(): void;

    final public function display(): void
    {
        $this->open();
        for ($i = 0; $i < 5; ++$i) {
            $this->print();
        }
        $this->close();
    }
}
