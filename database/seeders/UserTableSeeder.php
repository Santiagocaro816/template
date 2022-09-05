<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         *  User test 1 - Aprendiz
         */
        $user = User::create([
            'name' => 'Empleado test',
            'email' => 'empleado@gmail.com',
            'phone' => '322154000',
            'document' => '123456789',
            'password' => Hash::make('password')
        ]);
        $user->assignRole('empleado');

        /*
        *  User test 2 - Instructor
        */
        $user = User::create([
            'name' => 'Cliente test',
            'email' => 'cliente@gmail.com',
            'phone' => '322154001',
            'document' => '987654321',
            'password' => Hash::make('password')
        ]);
        $user->assignRole('cliente');


    }
}
