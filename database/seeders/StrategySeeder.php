<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('strategies')->insert([
            'id' => 1,
            'name' => 'STRATEGY_UNSPECIFIED',
        ]);
        DB::table('strategies')->insert([
            'id' => 2,
            'name' => 'DESKTOP',
        ]);
        
        DB::table('strategies')->insert([
            'id' => 3,
            'name' => 'MOBILE',
        ]);
    }
}
