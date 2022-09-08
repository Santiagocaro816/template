<?php

namespace Database\Seeders;


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
        $this->call(Position_table_seeder::class);
        $this->call(Soccer_players_table_seeder::class);
        $this->call(Card_table_seeder::class);

    }
}
