<?php

namespace Database\Seeders;

use App\Models\Payments;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = Payments::create([
            'name' => 'Efectivo',
            'interest' => 0,
        ]);

        $payment = Payments::create([
            'name' => 'Credito',
            'interest' => 2.5,
        ]);
    }
}
