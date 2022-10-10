<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoVolController;
use App\Http\Controllers\reserver;
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
>>>>>>> 763af2397981791667fb15e0f16b95078336c53e
