<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoVolController;
use App\Http\Controllers\reserver;
use App\Http\Controllers\Ticket;
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

Route::get('/InfoVol',[InfoVolController::class,'index'])
                 ->name('InfoVol');
<<<<<<< HEAD


=======
Route::get('/Réserver',[reserver::class,'index'])
                 ->name('réserver');
<<<<<<< HEAD
>>>>>>> 763af2397981791667fb15e0f16b95078336c53e
=======
Route::post('/ticket',[Ticket::class,'store'])
                 ->name('ticket');
                
>>>>>>> 35869106405f851e41f89001d4697429fab9c905
