<?php

declare(strict_types=1);

namespace Src\Iterator;

class BookShelfIterator implements IteratorInterface
{
    private int $index = 0;

    public function __construct(private BookShelf $bookShelf)
    {
    }

    public function hasNext(): bool
    {
        return $this->index < $this->bookShelf->getLength();
    }

    public function next(): Book
    {
        $book = $this->bookShelf->getBookAt($this->index);
        ++$this->index;

        return $book;
    }
}
