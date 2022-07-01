<?php

declare(strict_types=1);

namespace Src\Prototype;

use Src\Prototype\FrameWork\Manager;

require_once '../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        $manager = new Manager();
        $upen = new UnderlinePen('-');
        $mbox = new MessageBox('*');
        $sbox = new MessageBox('/');

        $manager->register('strong message', $upen);
        $manager->register('warning box', $mbox);
        $manager->register('slash box', $sbox);

        $p1 = $manager->create('strong message');
        $p1->use('Hello,world.');

        $p2 = $manager->create('warning box');
        $p2->use('Hello,world.');

        $p3 = $manager->create('slash box');
        $p3->use('Hello,world');
    }
}

$main = new Main();
$main->run();
