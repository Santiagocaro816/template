<?php

namespace Database\Seeders;
use App\Models\Position;
use Illuminate\Database\Seeder;

class Position_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $positions = ['P', 'DFI', 'DFD', 'DFC', 'DMI', 'D', 'DMC', 'MI', 'MD', 'MC', 'MPI', 'MPD', 'MPC', 'DI', 'DD', 'DC'
        ];
        foreach($positions as $position){
            $P = Position::create([
                'position' => $position
            ]);
        }



    }
}
