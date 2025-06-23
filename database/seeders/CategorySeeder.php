<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Pribadi', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Kuliah', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Kerja', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Belanja', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
