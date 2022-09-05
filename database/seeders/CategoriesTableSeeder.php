<?php

namespace Database\Seeders;

use App\Models\Categories;
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
        $category = Categories::create([
            'name' => 'SOFÁ CAMA',
        ]);
        $category = Categories::create([
            'name' => 'SOFÁ',
        ]);
        $category = Categories::create([
            'name' => 'SOFÁ L',
        ]);
        $category = Categories::create([
            'name' => 'CAMAS',
        ]);
        $category = Categories::create([
            'name' => 'JUEGO DE COMEDORES',
        ]);
        $category = Categories::create([
            'name' => 'MESAS',
        ]);
        $category = Categories::create([
            'name' => 'SILLAS',
        ]);
        $category = Categories::create([
            'name' => 'BIFFES',
        ]);
    }
}
