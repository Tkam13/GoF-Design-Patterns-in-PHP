<?php

declare(strict_types=1);

namespace Src\Adapter\Ijo;

require_once '../../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        $printBanner = new PrintBanner('Hello');
        $printBanner->printWeak();
        $printBanner->printStrong();
    }
}

$main = new Main();
$main->run();
