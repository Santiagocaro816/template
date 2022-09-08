<?php

namespace Database\Seeders;

use App\Models\Soccer_player;
use Illuminate\Database\Seeder;

class Soccer_players_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ["name"=>"RONALDO", "age"=>37, "avg"=>, "speed"=>8386, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/cristiano.png", "position_id"=>]
            ["name"=>"MESSI", "age"=>35, "avg"=>, "speed"=>80, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/messi.png.png", "position_id"=>]
        ["name"=>"BENZEMA", "age"=>34, "avg"=>, "speed"=>74, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/benzema.png", "position_id"=>]
            ["name"=>"BRUYNE", "age"=>31, "avg"=>, "speed"=>77, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"COMAN", "age"=>26, "avg"=>, "speed"=>82, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"COURTOIS", "age"=>30, "avg"=>, "speed"=>65, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"JONG", "age"=>25, "avg"=>, "speed"=>75, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"DEMBÉLÉ", "age"=>25, "avg"=>, "speed"=>83, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"HAALAND", "age"=>22, "avg"=>, "speed"=>89, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"KANTE", "age"=>31, "avg"=>, "speed"=>90, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"KIMMINCH", "age"=>27, "avg"=>, "speed"=>82, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"LAPORTE", "age"=>28, "avg"=>, "speed"=>80, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"LEWANDOSKY", "age"=>34, "avg"=>, "speed"=>75, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"DIAZ", "age"=>25, "avg"=>, "speed"=>85, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"MÁNE", "age"=>30, "avg"=>, "speed"=>85, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"MBAPPE", "age"=>23, "avg"=>, "speed"=>90, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"MODRIC", "age"=>36, "avg"=>, "speed"=>75, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"NEUER", "age"=>36, "avg"=>, "speed"=>65, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"NEYMAR", "age"=>30, "avg"=>, "speed"=>80, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"RAMOS", "age"=>36, "avg"=>, "speed"=>78, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"RASHFORD", "age"=>24, "avg"=>, "speed"=>82, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"SALAH", "age"=>30, "avg"=>, "speed"=>81, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"STERLING", "age"=>27, "avg"=>, "speed"=>83, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"STEGEN", "age"=>30, "avg"=>, "speed"=>84, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"VIDAL", "age"=>35, "avg"=>, "speed"=>62, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"WALKER", "age"=>32, "avg"=>, "speed"=>74, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"SANCHÉZ", "age"=>33, "avg"=>, "speed"=>79, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"IBRAHIMOVICH", "age"=>40, "avg"=>, "speed"=>75, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"DAVIES", "age"=>21, "avg"=>, "speed"=>70, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"CUADRADO", "age"=>34, "avg"=>, "speed"=>80, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"GRIEZMANN", "age"=>31, "avg"=>, "speed"=>79, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
            ["name"=>"SANÉ", "age"=>26, "avg"=>, "speed"=>80, "endurance"=>, "skill"=>, "defending"=>, "strong"=>, "img"=>"/img/soccer_player/.png", "position_id"=>]
        ];
        $array = ['', 'MESSI', 'BENZEMA', 'BRUYNE', 'COMAN',
            'COURTOIS', 'JONG', 'DEMBÉLÉ', 'HAALAND'
            , 'KANTE', 'KIMMINCH', 'LAPORTE', 'LEWANDOSKY', 'DIAZ', 'MÁNE',
            'MBAPPE', 'MODRIC', 'NEUER', 'NEYMAR','RAMOS','RASHFORD','SALAH','STERLING',
            'STEGEN','VIDAL','WALKER','SANCHÉZ','IBRAHIMOVICH','DAVIES','CUADRADO','GRIEZMANN','SANÉ'];
        $age = [,,, , , , , , , , , , , , , , , , , , , , , , , ,
            , , , , , ];
        $avg = [''];
        $speed = [,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,];
        $endurance = [''];
        $skill = [''];
        $defending = [''];
        $strong = [''];
        $img = [''];
        $position_id = [''];

        $soccer_player = Soccer_player::create([

            'name' => '',
            'age' => '',
            'avg' => '',
            'speed' => '',
            'endurance' => '',
            'skill' => '',
            'defending' => '',
            'strong' => '',
            'shoot' => '',
            'img' => '',
            'position_id' => '',
        ]);
    }
}
