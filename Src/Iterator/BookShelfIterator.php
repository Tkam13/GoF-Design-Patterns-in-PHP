<?php

declare(strict_types=1);

namespace Src\Iterator;

use Iterator;

/**
 * @implements Iterator<Book>
 */
class BookShelfIterator implements Iterator
{
    private int $index = 0;

    public function __construct(private BookShelf $bookShelf)
    {
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function current(): Book
    {
        return $this->bookShelf->getBookAt($this->index);
    }

    public function key(): int
    {
        return $this->index;
    }

    public function next(): void
    {
        ++$this->index;
    }

    public function valid(): bool
    {
        return $this->index < $this->bookShelf->getLength();
    }
}
