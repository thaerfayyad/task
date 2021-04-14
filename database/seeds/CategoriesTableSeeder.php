<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['cat one', 'cat two', 'cat three'];

        foreach ($categories as $category) {

            \App\Models\Category::create([
                'name' => $category, 'description' => $category . ' desc',
            ]);

        }
    }
}
