<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Player;
use App\Models\Room;
use Illuminate\Http\Request;

class Room_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::where('type', 1)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temp = 'a';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $code=rand(100000,999999);
//        Crear sala, genera una hexadecimal como identificador de la misma
        $array = [];
        $array["code"] = $code;
        $array["type"] = 1;
        $room = Room::create($array);

//        return redirect()->route('nombreRuta');
        $request = $request->all();
        $request["role"] = 1;
        $player = Player::create($request);

        $datos = [
            "player_id"=> $player->id,

            "room_id" => $room->id,
            "card_id" => "1",
        ];
        $room=($room->id);
        $game = Games::create($datos);
            return redirect('partida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $sale = Room::find($id)->where('type', '')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
