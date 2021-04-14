<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['pro one', 'pro two','pro th'];

        foreach ($products as $product) {

            \App\Models\Product::create([
                'category_id' => 1,
                'name' => $product, 'description' => $product . ' desc',
                'purchase_price' => 100,
                'sale_price' => 150,
                'stock' => 100,
            ]);

        }
    }
}
