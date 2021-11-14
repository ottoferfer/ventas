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
        Product::create([
            'name' => 'HUAWEI',
            'barcode' => '7501005987',
            'cost' => 2000,
            'price' => 2850,
            'stock' => 1000,
            'alerts' => 15,
            'image' => 'celular.png',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'HUAWEI',
            'barcode' => '7501254987',
            'cost' => 1000,
            'price' => 1850,
            'stock' => 1000,
            'alerts' => 15,
            'image' => 'tablet.png',
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'HUAWEI',
            'barcode' => '7501005987',
            'cost' => 8000,
            'price' => 10850,
            'stock' => 1000,
            'alerts' => 15,
            'image' => 'compu.png',
            'category_id' => 3

        ]);
    }
}
