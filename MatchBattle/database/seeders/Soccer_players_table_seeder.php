<?php

namespace Database\Seeders;

use App\Models\Soccer_players;
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

        $arrays = [
            ["name"=>"RONALDO", "age"=>37, "avg"=>91, "speed"=>83, "endurance"=>85, "skill"=>87, "defending"=>60, "strong"=>89, "img"=>"/img/soccer_player/cristiano.png", "position_id"=>16, "shoot"=>89],
            ["name"=>"MESSI", "age"=>35, "avg"=>92, "speed"=>80, "endurance"=>81, "skill"=>86, "defending"=>60, "strong"=>85, "img"=>"/img/soccer_player/messi.png.png", "position_id"=>10, "shoot"=>85],
            ["name"=>"BENZEMA", "age"=>34, "avg"=>90, "speed"=>74, "endurance"=>86, "skill"=>96, "defending"=>60, "strong"=>79, "img"=>"/img/soccer_player/benzema.png", "position_id"=>16, "shoot"=>87],
            ["name"=>"BRUYNE", "age"=>31, "avg"=>89, "speed"=>77, "endurance"=>82, "skill"=>87, "defending"=>67, "strong"=>69, "img"=>"/img/soccer_player/bruyne.png", "position_id"=>10, "shoot"=>87],
            ["name"=>"COMAN", "age"=>26, "avg"=>86, "speed"=>82, "endurance"=>85, "skill"=>88, "defending"=>73, "strong"=>75, "img"=>"/img/soccer_player/coman.png", "position_id"=>8, "shoot"=>79],
            ["name"=>"COURTOIS", "age"=>30, "avg"=>89, "speed"=>65, "endurance"=>60, "skill"=>88, "defending"=>86, "strong"=>75, "img"=>"/img/soccer_player/courtouis.png", "position_id"=>1, "shoot"=>84],
            ["name"=>"JONG", "age"=>25, "avg"=>87, "speed"=>75, "endurance"=>85, "skill"=>13, "defending"=>85, "strong"=>80, "img"=>"/img/soccer_player/dejong.png", "position_id"=>7, "shoot"=>75],
            ["name"=>"DEMBÉLÉ", "age"=>25, "avg"=>85, "speed"=>83, "endurance"=>87, "skill"=>87, "defending"=>40, "strong"=>71, "img"=>"/img/soccer_player/dembele.png", "position_id"=>12, "shoot"=>83],
            ["name"=>"HAALAND", "age"=>22, "avg"=>88, "speed"=>89, "endurance"=>83, "skill"=>89, "defending"=>40, "strong"=>89, "img"=>"/img/soccer_player/haaland.png", "position_id"=>16, "shoot"=>84],
            ["name"=>"KANTE", "age"=>31, "avg"=>88, "speed"=>90, "endurance"=>80, "skill"=>78, "defending"=>79, "strong"=>76, "img"=>"/img/soccer_player/kante.png", "position_id"=>9, "shoot"=>79],
            ["name"=>"KIMMINCH", "age"=>27, "avg"=>88, "speed"=>82, "endurance"=>85, "skill"=>79, "defending"=>85, "strong"=>81, "img"=>"/img/soccer_player/kimmich.png", "position_id"=>10, "shoot"=>79],
            ["name"=>"LAPORTE", "age"=>28, "avg"=>87, "speed"=>80, "endurance"=>81, "skill"=>82, "defending"=>92, "strong"=>89, "img"=>"/img/soccer_player/laporte.png", "position_id"=>3, "shoot"=>71],
            ["name"=>"LEWANDOSKY", "age"=>34, "avg"=>91, "speed"=>75, "endurance"=>83, "skill"=>63, "defending"=>40, "strong"=>87, "img"=>"/img/soccer_player/lewandoski.png", "position_id"=>16, "shoot"=>89],
            ["name"=>"DIAZ", "age"=>25, "avg"=>86, "speed"=>85, "endurance"=>85, "skill"=>85, "defending"=>40, "strong"=>73, "img"=>"/img/soccer_player/luisdiaz.png", "position_id"=>11, "shoot"=>79],
            ["name"=>"MÁNE", "age"=>30, "avg"=>88, "speed"=>85, "endurance"=>84, "skill"=>89, "defending"=>49, "strong"=>81, "img"=>"/img/soccer_player/mane.png", "position_id"=>11, "shoot"=>75],
            ["name"=>"MBAPPE", "age"=>23, "avg"=>90, "speed"=>90, "endurance"=>93, "skill"=>88, "defending"=>56, "strong"=>81, "img"=>"/img/soccer_player/mbappe.png", "position_id"=>12, "shoot"=>81],
            ["name"=>"MODRIC", "age"=>36, "avg"=>90, "speed"=>75, "endurance"=>81, "skill"=>93, "defending"=>53, "strong"=>79, "img"=>"/img/soccer_player/modric.png", "position_id"=>10, "shoot"=>81],
            ["name"=>"NEUER", "age"=>36, "avg"=>89, "speed"=>65, "endurance"=>62, "skill"=>85, "defending"=>56, "strong"=>70, "img"=>"/img/soccer_player/neuer.png", "position_id"=>1, "shoot"=>68],
            ["name"=>"NEYMAR", "age"=>30, "avg"=>90, "speed"=>80, "endurance"=>83, "skill"=>30, "defending"=>79, "strong"=>89, "img"=>"/img/soccer_player/neymar.png", "position_id"=>11, "shoot"=>81],
            ["name"=>"RAMOS", "age"=>36, "avg"=>86, "speed"=>78, "endurance"=>79, "skill"=>95, "defending"=>63, "strong"=>79, "img"=>"/img/soccer_player/ramos.png", "position_id"=>3, "shoot"=>79],
            ["name"=>"RASHFORD", "age"=>24, "avg"=>85, "speed"=>82, "endurance"=>81, "skill"=>65, "defending"=>58, "strong"=>71, "img"=>"/img/soccer_player/rashford.png", "position_id"=>11, "shoot"=>81],
            ["name"=>"SALAH", "age"=>30, "avg"=>89, "speed"=>81, "endurance"=>89, "skill"=>83, "defending"=>78, "strong"=>68, "img"=>"/img/soccer_player/salah.png", "position_id"=>12, "shoot"=>85],
            ["name"=>"STERLING", "age"=>27, "avg"=>88, "speed"=>83, "endurance"=>85, "skill"=>92, "defending"=>42, "strong"=>74, "img"=>"/img/soccer_player/sterling.png", "position_id"=>12, "shoot"=>79],
            ["name"=>"STEGEN", "age"=>30, "avg"=>88, "speed"=>84, "endurance"=>61, "skill"=>87, "defending"=>57, "strong"=>79, "img"=>"/img/soccer_player/tersteguen.png", "position_id"=>1, "shoot"=>61],
            ["name"=>"VIDAL", "age"=>35, "avg"=>85, "speed"=>62, "endurance"=>81, "skill"=>21, "defending"=>65, "strong"=>79, "img"=>"/img/soccer_player/vidal.png", "position_id"=>7, "shoot"=>79],
            ["name"=>"WALKER", "age"=>32, "avg"=>87, "speed"=>74, "endurance"=>79, "skill"=>75, "defending"=>87, "strong"=>54, "img"=>"/img/soccer_player/walker.png", "position_id"=>5, "shoot"=>75],
            ["name"=>"SANCHÉZ", "age"=>33, "avg"=>86, "speed"=>79, "endurance"=>79, "skill"=>79, "defending"=>95, "strong"=>79, "img"=>"/img/soccer_player/sanchez.png", "position_id"=>12, "shoot"=>79],
            ["name"=>"IBRAHIMOVICH", "age"=>40, "avg"=>85, "speed"=>75, "endurance"=>69, "skill"=>79, "defending"=>85, "strong"=>89, "img"=>"/img/soccer_player/ibrahimovic.png", "position_id"=>16, "shoot"=>75],
            ["name"=>"DAVIES", "age"=>21, "avg"=>85, "speed"=>70, "endurance"=>85, "skill"=>87, "defending"=>75, "strong"=>79, "img"=>"/img/soccer_player/davies.png", "position_id"=>3, "shoot"=>75],
            ["name"=>"CUADRADO", "age"=>34, "avg"=>85, "speed"=>80, "endurance"=>84, "skill"=>90, "defending"=>52, "strong"=>79, "img"=>"/img/soccer_player/cuadrado.png", "position_id"=>2, "shoot"=>79],
            ["name"=>"GRIEZMANN", "age"=>31, "avg"=>87, "speed"=>79, "endurance"=>81, "skill"=>85, "defending"=>68, "strong"=>75, "img"=>"/img/soccer_player/griezmann.png", "position_id"=>16, "shoot"=>85],
            ["name"=>"SANÉ", "age"=>26, "avg"=>88, "speed"=>80, "endurance"=>82, "skill"=>87, "defending"=>62, "strong"=>8, "img"=>"/img/soccer_player/sane.png", "position_id"=>11, "shoot"=>83]
        ];
        $i = 0;
        foreach ($arrays as $soccer_player){
            $i+=1;
            $soccer_player = Soccer_players::create([

                'name' => $soccer_player['name'],
                'age' => $soccer_player['age'],
                'avg' => $soccer_player['avg'],
                'speed' => $soccer_player['speed'],
                'endurance' => $soccer_player['endurance'],
                'skill' => $soccer_player['skill'],
                'defending' => $soccer_player['defending'],
                'strong' => $soccer_player['strong'],
                'shoot' => $soccer_player['shoot'],
                'img' => $soccer_player['img'],
                'position_id' => $soccer_player['position_id'],
            ]);
            if($i==32){
                break;
            }
        }

    }
}
