<?php

declare(strict_types=1);

namespace Src\Iterator;

require_once __DIR__.'/../../vendor/autoload.php';

class Main
{
    public function run(): void
    {
        $bookShelf = new BookShelf(4);
        $bookShelf->appendBook(new Book('Around the World in 80 Days'));
        $bookShelf->appendBook(new Book('Bible'));
        $bookShelf->appendBook(new Book('Cinderella'));
        $bookShelf->appendBook(new Book('Daddy-Long-Legs'));

        $iterator = $bookShelf->iterator();
        while ($iterator->hasNext()) {
            $book = $iterator->next();
            echo $book->getName().PHP_EOL;
        }
    }
}

$main = new Main();
$main->run();
