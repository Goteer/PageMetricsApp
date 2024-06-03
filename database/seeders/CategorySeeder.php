<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'CATEGORY_UNSPECIFIED',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'ACCESSIBILITY',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'BEST_PRACTICES',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'PERFORMANCE',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'PWA',
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'SEO',
        ]);
    }
}
