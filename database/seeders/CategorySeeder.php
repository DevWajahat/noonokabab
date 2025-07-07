<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;


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
