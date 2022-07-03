<?php

declare(strict_types=1);

namespace Src\Builder;

class TextBuilder implements Builder
{
    private string $stringBuilder = '';

    public function makeTitle(string $title): void
    {
        $this->stringBuilder .= "============================\n";
        $this->stringBuilder .= '「';
        $this->stringBuilder .= $title;
        $this->stringBuilder .= "」\n\n";
    }

    public function makeString(string $string): void
    {
        $this->stringBuilder .= '■';
        $this->stringBuilder .= $string;
        $this->stringBuilder .= "\n\n";
    }

    public function makeItems(array $items): void
    {
        foreach ($items as $string) {
            $this->stringBuilder .= '  ・';
            $this->stringBuilder .= $string;
            $this->stringBuilder .= "\n";
        }
    }

    public function close(): void
    {
        $this->stringBuilder .= "============================\n";
    }

    public function getTextResult(): string
    {
        return $this->stringBuilder;
    }
}
