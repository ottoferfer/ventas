<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'CELULARES',
            'image' => 'https://dummyimage.com/200x150/000/fff'
        ]);
        Category::create([
            'name' => 'TABLETS',
            'image' => 'https://dummyimage.com/200x150/000/fff'
        ]);
        Category::create([
            'name' => 'COMPUTADORAS',
            'image' => 'https://dummyimage.com/200x150/000/fff'
        ]);
    }
}
