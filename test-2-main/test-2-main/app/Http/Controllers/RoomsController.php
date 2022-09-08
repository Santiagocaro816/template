<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use App\Models\Game;
use App\Models\Room;
use App\Models\Soccer_players;
use App\Models\User;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('room.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rand=rand(100000,999999);
        $username = $request->username;
        $user = User::where('username', $username)->first();
        if (!$user) {
            $user = User::create([
                'username' => $username
            ]);
        }
        $room = Room::create([
            'code' => $rand,
            'user_id' => $user->id,

        ]);
        $cantidad = 32;
        $i = 0;

        $random = rand(1, $cantidad);
        $array[] = $random;
        do {

            for ($i = 0; $i < count($array); $i++) {
                if ($random == $array[$i]) {
                    $i = 0;
                    $random = rand(1, $cantidad);
                }
            }
            $array[] = $random;
        } while (count($array) != $cantidad);
        $i=0;
        foreach ($array as $ar){
            $i++;
            if($i<=7){
                $game = Game::create([
                    'user_id' => $user->id,
                    'room_id' => $room->id,
                    'card_id' => $ar
                ]);
            }

        }

        return redirect()->route('salas.show', $room->code);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $room = Room::where('code', $code)->first();
        $users = Game::where('room_id', $room->id)->get();
        echo $users;
        $cards = Soccer_players::select('soccer_players.category','soccer_players.name','soccer_players.avg','soccer_players.speed', 'soccer_players.endurance', 'soccer_players.strong', 'soccer_players.skill','soccer_players.defending',
            'soccer_players.shoot','soccer_players.img as imgS', 'position')
            ->join('positions', 'soccer_players.position_id', '=', 'positions.id')
            ->join('games', 'soccer_players.id','=', 'games.card_id')
//            ->join('cards', 'user_id','=','card_id')
            ->get();


        return view('room.assignCards', compact('room','users', 'cards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addRoom(Request $request)
    {
        $username = $request->username;
        $code_room = $request->code;

        $exist_room = Room::where('code', $code_room)->first();
        if (!$exist_room) {
            return redirect()->route('salas.index')->with('message', 'La sala no existe: ' . $code_room);
        } else {
            $user = User::where('username', $username)->first();
            if (!$user) {
                $user = User::create([
                    'username' => $username
                ]);
            }
            $game = Game::where('user_id', $user->id)->where('room_id', $exist_room->id)->first();
            if (!$game) {
                $cantidad = 32;
                $i = 0;

                $random = rand(1, $cantidad);
                $array[] = $random;
                do {

                    for ($i = 0; $i < count($array); $i++) {
                        if ($random == $array[$i]) {
                            $i = 0;
                            $random = rand(1, $cantidad);
                        }
                    }
                    $array[] = $random;
                } while (count($array) != $cantidad);
                $i=0;
                foreach ($array as $ar){
                    $i++;
                    if($i<=7){
                        $game = Game::create([
                            'user_id' => $user->id,
                            'room_id' => $exist_room->id,
                            'card_id' => $ar
                        ]);
                    }

                }

            }

            }

            return redirect()->route('salas.show', $exist_room->code);
        }
    public function assignCards(){
        $cardfree = Cards::select('id')->get();
        echo $cardfree;
    }
}
