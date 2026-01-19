<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'João Silva',
                'email' => 'joao@teste.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@teste.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'Pedro Costa',
                'email' => 'pedro@teste.com',
                'password' => Hash::make('password123')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}