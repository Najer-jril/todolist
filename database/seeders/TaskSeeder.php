<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil ID kategori yang sudah di-seed
        $personalCategoryId = DB::table('categories')->where('category_name', 'Pribadi')->value('id');
        $collegeCategoryId = DB::table('categories')->where('category_name', 'Kuliah')->value('id');
        $workCategoryId = DB::table('categories')->where('category_name', 'Kerja')->value('id');
        $shoppingCategoryId = DB::table('categories')->where('category_name', 'Belanja')->value('id');

        DB::table('tasks')->insert([
            [
                'title' => 'Bayar tagihan listrik',
                'description' => 'Jatuh tempo tanggal 10 Juni',
                'due_date' => '2025-06-10',
                'priority' => 'High',
                'status' => 'pending',
                'category_id' => $personalCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'completed_at' => null,
            ],
            [
                'title' => 'Tugas kuliah APPL',
                'description' => 'Jatuh tempo tanggal 18 Juni',
                'due_date' => '2025-06-18',
                'priority' => 'High',
                'status' => 'pending',
                'category_id' => $collegeCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'completed_at' => null,
            ],
            [
                'title' => 'Siapkan laporan bulanan',
                'description' => 'Data dari bulan Mei',
                'due_date' => '2025-06-15',
                'priority' => 'High',
                'status' => 'pending',
                'category_id' => $workCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'completed_at' => null,
            ],
            [
                'title' => 'Beli bahan makanan',
                'description' => 'Sayuran, buah, dan daging',
                'due_date' => '2025-06-07',
                'priority' => 'Medium',
                'status' => 'pending',
                'category_id' => $shoppingCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'completed_at' => null,
            ],
            [
                'title' => 'Selesaikan modul Laravel',
                'description' => 'Mempelajari Eloquent ORM',
                'due_date' => '2025-06-20',
                'priority' => 'Low',
                'status' => 'in progress',
                'category_id' => $personalCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
                'completed_at' => null,
            ],
        ]);
    }
}
