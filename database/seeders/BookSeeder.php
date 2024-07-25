<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Alain',
                'author' => 'Alain',
                'year' => 2023,
                'genre' => 'Policier'
            ],
            [
                'title' => 'Thomas',
                'author' => 'Thomas',
                'year' => 2021,
                'genre' => 'Policier'
            ],
            [
                'title' => 'Engueran',
                'author' => 'Engueran',
                'year' => 2002,
                'genre' => 'Aventure'
            ],
            [
                'title' => 'Gabin',
                'author' => 'Gabin',
                'year' => 1999,
                'genre' => 'Horreur'
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
