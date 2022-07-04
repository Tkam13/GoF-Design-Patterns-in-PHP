<?php

declare(strict_types=1);

namespace Src\AbstractFactory\Factory;

use Exception;
use SplFileObject;

abstract class Page
{
    /** @var array<Item> */
    protected array $content = [];

    public function __construct(protected string $title, protected string $author)
    {
    }

    public function add(Item $item): void
    {
        $this->content[] = $item;
    }

    public function output(string $fileName): void
    {
        try {
            $file = new SplFileObject($fileName, 'w');
            $file->fwrite($this->makeHTML());
            echo $fileName.' を作成しました。'.PHP_EOL;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    abstract public function makeHTML(): string;
}
