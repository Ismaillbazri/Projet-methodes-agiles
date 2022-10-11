<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoVolController;
use App\Http\Controllers\reserver;
use App\Http\Controllers\Ticket;
use App\Http\Controllers\Controller;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[Controller::class,'index'])
                 ->name('Acceuil');

Route::get('/InfoVol/{id}',[InfoVolController::class,'show'])
                 ->name('InfoVol');



/*Route::get('/Réserver',[reserver::class,'index'])
                 ->name('réserver');*/

Route::get('/Réserver/{id}',[reserver::class,'show'])
                 ->name('réserver');


Route::post('/ticket/{id}',[Ticket::class,'store'])
                 ->name('ticket');
                

