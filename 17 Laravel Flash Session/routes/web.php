<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FlashController;


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
Route::view('FlashSession', 'FlashSession');
Route::post('Flashsubmit', [FlashController::class,'index']);
Route::get('Deletesubmit', [FlashController::class,'Delete']);

