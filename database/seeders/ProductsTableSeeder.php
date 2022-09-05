<?php

namespace Database\Seeders;

use App\Models\Products;
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
        $product = Products::create([
            'name' => 'SOFACAMA MAURO CUERO SINTETICO',
            'categories_id' => 1,
            'price' => '399000',
            'stock' => 5,
            'img'=>'\img\PRODUCTOS\SALAS\SOFA CAMA\SOFACAMA MAURO CUERO SINTETICO.PNG',
        ]);

        $product = Products::create([
            'name' => 'SILLACAMA ANGELA CUERO SINTETICO',
            'categories_id' => 1,
            'price' => '599000',
            'stock' => 2,
            'img'=>'\img\PRODUCTOS\SALAS\SOFA CAMA\SILLACAMA ANGELA CUERO SINTETICO.PNG',
        ]);

        $product = Products::create([
            'name' => 'SOFA VIVIR CUERO SINTETICO',
            'categories_id' => 2,
            'price' => '499000',
            'stock' => 10,
            'img'=>'/img/PRODUCTOS/SALAS/SOFA/SOFA VIVIR CUERO SINTETICO.PNG',
        ]);

        $product = Products::create([
            'name' => 'SOFÁ JOEL CUERO SINTÉTICO',
            'categories_id' => 2,
            'price' => '599000',
            'stock' => 11,
            'img'=>'\img\PRODUCTOS\SALAS\SOFA\SOFÁ JOEL CUERO SINTÉTICO.PNG',
        ]);

        $product = Products::create([
            'name' => 'SALA MODULAR SOFÍA CUERO SINTÉTICO',
            'categories_id' => 3,
            'price' => '599000',
            'stock' => 8,
            'img'=>'\img\PRODUCTOS\SALAS\SOFA L\SALA MODULAR SOFÍA CUERO SINTÉTICO.PNG',
        ]);

        $product = Products::create([
            'name' => 'CAMA ROMA MICRO FIBRA',
            'categories_id' => 4,
            'price' => '499000',
            'stock' => 10,
            'img'=>'\img\PRODUCTOS\ALCOBAS\CAMAS\CAMA ROMA MICROFIBRA.PNG',
        ]);

        $product = Products::create([
            'name' => 'SALA CAMA STERIMBERG MICROFIBRA',
            'categories_id' => 4,
            'price' => '1799000',
            'stock' => 2,
            'img'=>'\img\PRODUCTOS\ALCOBAS\CAMAS\SALA CAMA STERIMBERG MICROFIBRA.PNG',
        ]);

        $product = Products::create([
            'name' => 'JUEGO DE COMEDOR DINA 4 PUESTOS',
            'categories_id' => 5,
            'price' => '1099000',
            'stock' => 20,
            'img'=>'\img\PRODUCTOS\COMEDORES\JUEGOS DE COMEDOR\JUEGO DE COMEDOR DINA 4 PUESTOS.PNG',
        ]);

        $product = Products::create([
            'name' => 'JUEGO DE COMEDOR DINA 6 PUESTOS',
            'categories_id' => 5,
            'price' => '1399000',
            'stock' => 17,
            'img'=>'\img\PRODUCTOS\COMEDORES\JUEGOS DE COMEDOR\JUEGO DE COMEDOR DINA 6 PUESTOS.PNG',
        ]);

        $product = Products::create([
            'name' => 'MESA DE COMEDOR ITALIA 4 PUESTOS',
            'categories_id' => 6,
            'price' => '449000',
            'stock' => 9,
            'img'=>'\img\PRODUCTOS\COMEDORES\MESAS\MESA DE COMEDOR ITALIA 4 PUESTOS.PNG',
        ]);

        $product = Products::create([
            'name' => 'PACK 2 SILLAS DINA',
            'categories_id' => 7,
            'price' => '398000',
            'stock' => 33,
            'img'=>'\img\PRODUCTOS\COMEDORES\SILLAS\PACK 2 SILLAS DINA.PNG',
        ]);

        $product = Products::create([
            'name' => 'BIFFE LOFT',
            'categories_id' => 8,
            'price' => '704000',
            'stock' => 7,
            'img'=>'\img\PRODUCTOS\COMEDORES\BIFFES\BIFFE LOFT.PNG',
        ]);
    }
}
