<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // IDs dos afiliados já existentes na tabela `affiliates`
        $affiliateIds = DB::table('affiliates')->pluck('id');

        // Cria 10 registros fictícios de comissões
        DB::table('commissions')->insert([
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 150.00,
                'date' => Carbon::now()->subDays(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 300.00,
                'date' => Carbon::now()->subDays(8),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 500.00,
                'date' => Carbon::now()->subDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 200.00,
                'date' => Carbon::now()->subDays(7),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 120.50,
                'date' => Carbon::now()->subDays(6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 350.75,
                'date' => Carbon::now()->subDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 275.25,
                'date' => Carbon::now()->subDays(4),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 50.00,
                'date' => Carbon::now()->subDays(9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 600.00,
                'date' => Carbon::now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliate_id' => $affiliateIds->random(),
                'value' => 450.00,
                'date' => Carbon::now()->subDays(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}