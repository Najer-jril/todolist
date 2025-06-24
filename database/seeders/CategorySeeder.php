<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\User;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first(); // ambil user pertama

        Category::create([
            'user_id' => $user->id,
            'category_name' => 'Pekerjaan',
        ]);

        Category::create([
            'user_id' => $user->id,
            'category_name' => 'Pribadi',
        ]);
    }
}
