<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'APPETIZERS'],
            ['name' => 'ENTRéE'],
            ['name' => 'BEVERAGES'],
            ['name' => 'SOUPS & SALADS'],
            ['name' => 'INDIVIDUAL SKEWERS'],
        ];

        foreach($categories as $category) {
            Category::create($category);
        }
    }
}
