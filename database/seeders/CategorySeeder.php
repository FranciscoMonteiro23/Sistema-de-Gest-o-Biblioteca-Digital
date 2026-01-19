<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Romance',
                'description' => 'Livros de histórias românticas e sentimentais'
            ],
            [
                'name' => 'Ficção Científica',
                'description' => 'Histórias sobre tecnologia, espaço e futurismo'
            ],
            [
                'name' => 'História',
                'description' => 'Livros sobre eventos históricos e biografias'
            ],
            [
                'name' => 'Tecnologia',
                'description' => 'Livros técnicos sobre programação, IA e inovação'
            ],
            [
                'name' => 'Infantil',
                'description' => 'Livros para crianças e jovens leitores'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}