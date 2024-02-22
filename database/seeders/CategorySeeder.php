<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->create([
            'name' => 'Kasb kurslari',
            'parent_id' => null
        ]);
        Category::query()->create([
            'name' => 'Ilmiy kurslar',
            'parent_id' => null

        ]);
        Category::query()->create([
            'name' => 'Vebinarlar',
            'parent_id' => null

        ]);
    }
}
