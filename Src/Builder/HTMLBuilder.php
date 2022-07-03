<?php

declare(strict_types=1);

namespace Src\Builder;

use Exception;
use SplFileObject;

class HTMLBuilder implements Builder
{
    private string $fileName = 'untitled.html';
    private string $stringBuilder = '';

    public function makeTitle(string $title): void
    {
        $this->fileName = $title.'.html';
        $this->stringBuilder .= "<!DOCTYPE html>\n";
        $this->stringBuilder .= "<html>\n";
        $this->stringBuilder .= '<head><title>';
        $this->stringBuilder .= $title;
        $this->stringBuilder .= "</title></head>\n";
        $this->stringBuilder .= "<body>\n";
        $this->stringBuilder .= '<h1>';
        $this->stringBuilder .= $title;
        $this->stringBuilder .= "</h1>\n\n";
    }

    public function makeString(string $string): void
    {
        $this->stringBuilder .= '<p>';
        $this->stringBuilder .= $string;
        $this->stringBuilder .= "</p>\n\n";
    }

    public function makeItems(array $items): void
    {
        $this->stringBuilder .= '<ul>';
        foreach ($items as $string) {
            $this->stringBuilder .= '<li>';
            $this->stringBuilder .= $string;
            $this->stringBuilder .= '</li>';
        }
        $this->stringBuilder."</ul>\n\n";
    }

    public function close(): void
    {
        $this->stringBuilder .= '</body>';
        $this->stringBuilder .= "</html>\n";

        try {
            $file = new SplFileObject($this->fileName, 'w');
            $file->fwrite($this->stringBuilder);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getHTMLResult(): string
    {
        return $this->fileName;
    }
}
