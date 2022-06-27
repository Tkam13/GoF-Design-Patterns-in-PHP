<?php

declare(strict_types=1);

namespace Src\Adapter\Practice2;

use Exception;

require_once '../../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        $fileIO = new FileProperties();

        try {
            $fileIO->readFromFile('file.txt');
            $fileIO->setValue('year', '2004');
            $fileIO->setValue('month', '4');
            $fileIO->setValue('day', '21');
            $fileIO->writeToFile('newfile.txt');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
$main = new Main();
$main->run();
