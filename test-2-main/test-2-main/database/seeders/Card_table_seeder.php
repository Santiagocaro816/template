<?php

namespace Database\Seeders;

use App\Models\Cards;
use Illuminate\Database\Seeder;

class Card_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            ["img"=> "img/soccer_player/Benzema.png", "category"=> "A1", "soccer_player_id"=> 3],
            ["img"=> "img/soccer_player/bruyne.png", "category"=> "A2", "soccer_player_id"=> 4],
            ["img"=> "img/soccer_player/coman.png", "category"=> "A3", "soccer_player_id"=> 5],
            ["img"=> "img/soccer_player/courtois.png", "category"=> "A4", "soccer_player_id"=> 6],
            ["img"=> "img/soccer_player/cristiano.png", "category"=> "B1", "soccer_player_id"=> 1],
            ["img"=> "img/soccer_player/cuadrado.png", "category"=> "B2", "soccer_player_id"=> 30],
            ["img"=> "img/soccer_player/davies.png", "category"=> "B3", "soccer_player_id"=> 29],
            ["img"=> "img/soccer_player/dejong.png", "category"=> "B4", "soccer_player_id"=> 7],
            ["img"=> "img/soccer_player/dembele.png", "category"=> "C1", "soccer_player_id"=> 8],
            ["img"=> "img/soccer_player/griezmann.png", "category"=> "C2", "soccer_player_id"=> 31],
            ["img"=> "img/soccer_player/haaland.png", "category"=> "C3", "soccer_player_id"=> 9],
            ["img"=> "img/soccer_player/ibrahimovic.png", "category"=> "C4", "soccer_player_id"=> 28],
            ["img"=> "img/soccer_player/kante.png", "category"=> "D1", "soccer_player_id"=> 10],
            ["img"=> "img/soccer_player/kimmich.png", "category"=> "D2", "soccer_player_id"=> 11],
            ["img"=> "img/soccer_player/laporte.png", "category"=> "D3", "soccer_player_id"=> 12],
            ["img"=> "img/soccer_player/lewandoski.png", "category"=> "D4", "soccer_player_id"=> 13],
            ["img"=> "img/soccer_player/luisdiaz.png", "category"=> "E1", "soccer_player_id"=> 14],
            ["img"=> "img/soccer_player/mane.png", "category"=> "E2", "soccer_player_id"=> 15],
            ["img"=> "img/soccer_player/mbappe.png", "category"=> "E3", "soccer_player_id"=> 16],
            ["img"=> "img/soccer_player/messi.png", "category"=> "E4", "soccer_player_id"=> 2],
            ["img"=> "img/soccer_player/modric.png", "category"=> "F1", "soccer_player_id"=> 17],
            ["img"=> "img/soccer_player/neuer.png", "category"=> "F2", "soccer_player_id"=> 18],
            ["img"=> "img/soccer_player/neymar.png", "category"=> "F3", "soccer_player_id"=> 19],
            ["img"=> "img/soccer_player/walker.png", "category"=> "F4", "soccer_player_id"=> 26],
            ["img"=> "img/soccer_player/ramos.png", "category"=> "G1", "soccer_player_id"=> 20],
            ["img"=> "img/soccer_player/rashford.png", "category"=> "G2", "soccer_player_id"=> 21],
            ["img"=> "img/soccer_player/salah.png", "category"=> "G3", "soccer_player_id"=> 22],
            ["img"=> "img/soccer_player/sanchez.png", "category"=> "G4", "soccer_player_id"=> 27],
            ["img"=> "img/soccer_player/sane.png", "category"=> "H1", "soccer_player_id"=> 32],
            ["img"=> "img/soccer_player/sterling.png", "category"=> "H2", "soccer_player_id"=> 23],
            ["img"=> "img/soccer_player/tersteguen.png", "category"=> "H3", "soccer_player_id"=> 24],
            ["img"=> "img/soccer_player/vidal.png", "category"=> "H4", "soccer_player_id"=> 25],
        ];

        foreach ($cards as $card){
            $card_soccer = Cards::create([
                "img" => $card['img'],
                "category" => $card['category'],
                "soccer_player_id" => $card['soccer_player_id'],
            ]);

        }
    }
}
