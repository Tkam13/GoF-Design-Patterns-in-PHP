<?php

declare(strict_types=1);

namespace Src\FactoryMethod;

use Src\FactoryMethod\IDCard\IDCardFactory;

require_once '../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        $factory = new IDCardFactory();
        $card1 = $factory->create('Hiroshi Yuki');
        $card2 = $factory->create('Tomura');
        $card3 = $factory->create('Hanako Sato');
        $card1->use();
        $card2->use();
        $card3->use();
    }
}
$main = new Main();
$main->run();
