<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;
use App\Models\Category;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        $user = User::first();
        $categories = Category::where('user_id', $user->id)->get();

        Task::create([
            'user_id' => $user->id,
            'category_id' => $categories[0]->id,
            'title' => 'Kerjakan Laporan',
            'desc' => 'Laporan akhir bulan',
            'due_date' => now()->addDays(3),
            'priority' => 'high',
        ]);

        Task::create([
            'user_id' => $user->id,
            'category_id' => $categories[1]->id,
            'title' => 'Belanja bulanan',
            'desc' => 'Beli kebutuhan dapur',
            'due_date' => now()->addDays(5),
            'priority' => 'medium',
        ]);
    }
}
