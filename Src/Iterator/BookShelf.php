<?php

declare(strict_types=1);

namespace Src\Iterator;

use IteratorAggregate;

/**
 * @implements IteratorAggregate<Book>
 */
class BookShelf implements IteratorAggregate
{
    /**
     * @var Book[]
     */
    private $books;

    private int $last = 0;

    public function __construct(int $maxSize)
    {
        $this->books = array_fill(0, $maxSize, new Book());
    }

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book): void
    {
        $this->books[$this->last++] = $book;
    }

    public function getLength(): int
    {
        return $this->last;
    }

    // 本だとIteratorInterfaceを返り値に指定している
    public function getIterator(): BookShelfIterator
    {
        return new BookShelfIterator($this);
    }
}
