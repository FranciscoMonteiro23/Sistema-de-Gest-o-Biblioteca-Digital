<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'isbn' => '9780316769488',
                'title' => 'O Apanhador no Campo de Centeio',
                'author' => 'J.D. Salinger',
                'category_id' => 1, // Romance
                'published_year' => 1951,
                'available' => true
            ],
            [
                'isbn' => '9780451524935',
                'title' => '1984',
                'author' => 'George Orwell',
                'category_id' => 2, // Ficção Científica
                'published_year' => 1949,
                'available' => true
            ],
            [
                'isbn' => '9780307277671',
                'title' => 'Sapiens: História Breve da Humanidade',
                'author' => 'Yuval Noah Harari',
                'category_id' => 3, // História
                'published_year' => 2011,
                'available' => false
            ],
            [
                'isbn' => '9780135957059',
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'category_id' => 4, // Tecnologia
                'published_year' => 2008,
                'available' => true
            ],
            [
                'isbn' => '9780064401883',
                'title' => 'O Pequeno Príncipe',
                'author' => 'Antoine de Saint-Exupéry',
                'category_id' => 5, // Infantil
                'published_year' => 1943,
                'available' => true
            ],
            [
                'isbn' => '9780547928227',
                'title' => 'O Hobbit',
                'author' => 'J.R.R. Tolkien',
                'category_id' => 2, // Ficção Científica
                'published_year' => 1937,
                'available' => true
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}