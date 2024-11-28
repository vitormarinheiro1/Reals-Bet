<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'João Silva',
                'email' => 'joao.silva@example.com',
                'password' => Hash::make('password123'),
                'active' => true,
                'email_verified_at' => now(),
                'remember_token' => 'token1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maria Oliveira',
                'email' => 'maria.oliveira@example.com',
                'password' => Hash::make('password123'),
                'active' => true,
                'email_verified_at' => now(),
                'remember_token' => 'token2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos Santos',
                'email' => 'carlos.santos@example.com',
                'password' => Hash::make('password123'),
                'active' => true,
                'email_verified_at' => now(),
                'remember_token' => 'token3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Souza',
                'email' => 'ana.souza@example.com',
                'password' => Hash::make('password123'),
                'active' => false,
                'email_verified_at' => null,
                'remember_token' => 'token4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedro Almeida',
                'email' => 'pedro.almeida@example.com',
                'password' => Hash::make('password123'),
                'active' => true,
                'email_verified_at' => now(),
                'remember_token' => 'token5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}