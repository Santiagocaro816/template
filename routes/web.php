<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::redirect('/','login');
Route::get('/dashboard', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','role:empleado'])->group(function () {
    Route::resource('productos', ProductsController::class);
});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','role:aprendiz'])->group(function () {

});
