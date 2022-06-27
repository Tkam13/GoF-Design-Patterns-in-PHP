<?php

declare(strict_types=1);

namespace Src\Adapter\Practice2;

use SplFileObject;

class FileProperties implements FileIOInterface
{
    /**
     * @var array<string,string>
     */
    private $properties;

    public function readFromFile(string $fileName): void
    {
        $file = new SplFileObject($fileName, 'r');
        while ($file->valid()) {
            $row = $file->fgets();
            if (!$row) {
                return;
            }
            [$key,$value] = explode('=', $row);
            $this->setValue($key, $value);
        }
    }

    public function writeToFile(string $flineName): void
    {
        $file = new SplFileObject($flineName, 'w');
        foreach ($this->properties as $key => $value) {
            $row = $key.'='.$value."\n";
            $file->fwrite($row);
            $file->next();
        }
    }

    public function setValue(string $key, string $value): void
    {
        $this->properties[$key] = $value;
    }

    public function getValue(string $key): string
    {
        return $this->properties[$key];
    }
}
