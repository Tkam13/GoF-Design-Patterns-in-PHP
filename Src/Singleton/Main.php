<?php

declare(strict_types=1);

namespace Src\Singleton;

require '../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        echo 'Start.'.PHP_EOL;
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();
        if ($obj1 === $obj2) {
            echo 'obj1とobj2は同じインスタンスです。'.PHP_EOL;
        } else {
            echo 'obj1とobj2は同じインスタンスではありません。'.PHP_EOL;
        }
        echo 'End.'.PHP_EOL;
    }
}
$main = new Main();
$main->run();
