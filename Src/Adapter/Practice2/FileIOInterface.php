<?php

declare(strict_types=1);

namespace Src\Adapter\Practice2;

use Exception;

interface FileIOInterface
{
    /**
     * @throws Exception
     */
    public function readFromFile(string $fileName): void;

    /**
     * @throws Exception
     */
    public function writeToFile(string $flineName): void;

    public function setValue(string $key, string $value): void;

    public function getValue(string $key): string;
}
