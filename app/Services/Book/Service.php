<?php

namespace App\Services\Book;

use App\Models\Book;

class Service
{
    public function store(array $data): void
    {
        Book::create($data);
    }

    public function update(array $data, Book $book): void
    {
        Book::where('id', $book->id)->update($data);
    }
}
