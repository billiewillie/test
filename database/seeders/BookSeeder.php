<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        collect()->range(1, 12)->each(fn (int $index) => Book::create([
            'title' => ucfirst(fake()->words(rand(1, 3), true)),
            'author' => fake()->name(),
            'year' => fake()->numberBetween(1900, 2020),
            'image' => 'books/cover-'.$index.'.jpg',
        ]));
    }
}
