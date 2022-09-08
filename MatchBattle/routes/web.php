<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('juego', \App\Http\Controllers\Room_controller::class);
Route::resource('partida', \App\Http\Controllers\Card_controller::class);


Route::get('/game', function (){

});




//Route Hooks - Do not delete//

