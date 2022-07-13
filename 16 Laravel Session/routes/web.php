<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SessionController;


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


//Session
Route::view('Session', 'Session');
Route::post('submit', [SessionController::class,'index']);
Route::get('Deletesubmit', [SessionController::class,'Delete']);
