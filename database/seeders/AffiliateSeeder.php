<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('affiliates')->insert([
            [
                'name' => 'João Silva',
                'cpf' => '12345678901',
                'birth_date' => '1985-05-15',
                'email' => 'joao.silva@example.com',
                'phone' => '11912345678',
                'address' => 'Rua das Flores, 123',
                'city' => 'São Paulo',
                'state' => 'SP',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maria Oliveira',
                'cpf' => '23456789012',
                'birth_date' => '1990-08-20',
                'email' => 'maria.oliveira@example.com',
                'phone' => '21987654321',
                'address' => 'Av. Atlântica, 456',
                'city' => 'Rio de Janeiro',
                'state' => 'RJ',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos Santos',
                'cpf' => '34567890123',
                'birth_date' => '1995-11-10',
                'email' => 'carlos.santos@example.com',
                'phone' => '31988881111',
                'address' => 'Rua Minas Gerais, 789',
                'city' => 'Belo Horizonte',
                'state' => 'MG',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Souza',
                'cpf' => '45678901234',
                'birth_date' => '2000-03-05',
                'email' => 'ana.souza@example.com',
                'phone' => '41977772222',
                'address' => 'Rua Curitiba, 101',
                'city' => 'Curitiba',
                'state' => 'PR',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedro Almeida',
                'cpf' => '56789012345',
                'birth_date' => '1988-12-25',
                'email' => 'pedro.almeida@example.com',
                'phone' => '51966663333',
                'address' => 'Av. Porto Alegre, 202',
                'city' => 'Porto Alegre',
                'state' => 'RS',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beatriz Lima',
                'cpf' => '67890123456',
                'birth_date' => '1993-07-14',
                'email' => 'beatriz.lima@example.com',
                'phone' => '71955554444',
                'address' => 'Rua Salvador, 303',
                'city' => 'Salvador',
                'state' => 'BA',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lucas Ferreira',
                'cpf' => '78901234567',
                'birth_date' => '1980-01-01',
                'email' => 'lucas.ferreira@example.com',
                'phone' => '81944445555',
                'address' => 'Rua Recife, 404',
                'city' => 'Recife',
                'state' => 'PE',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fernanda Costa',
                'cpf' => '89012345678',
                'birth_date' => '1998-09-09',
                'email' => 'fernanda.costa@example.com',
                'phone' => '91933336666',
                'address' => 'Av. Belém, 505',
                'city' => 'Belém',
                'state' => 'PA',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ricardo Pereira',
                'cpf' => '90123456789',
                'birth_date' => '1982-04-18',
                'email' => 'ricardo.pereira@example.com',
                'phone' => '51922227777',
                'address' => 'Rua Porto Alegre, 606',
                'city' => 'Porto Alegre',
                'state' => 'RS',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Juliana Martins',
                'cpf' => '01234567890',
                'birth_date' => '1986-06-06',
                'email' => 'juliana.martins@example.com',
                'phone' => '61911118888',
                'address' => 'Rua Brasília, 707',
                'city' => 'Brasília',
                'state' => 'DF',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}