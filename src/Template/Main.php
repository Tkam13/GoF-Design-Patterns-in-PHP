<?php

declare(strict_types=1);

namespace Src\Template;

require_once '../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        $d1 = new CharDisplay('H');
        $d2 = new StringDisplay('Hello,world.');
        $d3 = new StringDisplay('こんにちは。');

        $d1->display();
        $d2->display();
        $d3->display();
    }
}

$main = new Main();
$main->run();
