<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::upsert(
            [
                ['id' => 12, 'title' => '固定1', 'content' => '固定內容', 'price' => rand(0, 300), 'quantity' => rand(1, 10)],
                ['id' => 13, 'title' => '固定1', 'content' => '固定內容', 'price' => rand(0, 300), 'quantity' => rand(1, 10)],
            ],['id'],['price','quantity']
        );
    }
}
