<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['title'=>'測試1','content'=>'內容','price'=>rand(0,300),'quantity' => rand(1,10)]);
        $this->call(ProductSeeder::class);
        $this->command->info('產生固定資料');
    }
}
