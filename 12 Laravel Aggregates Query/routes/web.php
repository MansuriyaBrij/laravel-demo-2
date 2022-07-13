<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaxminController;


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


//30 Max Min
Route::get('Aggregates', [MaxminController::class,'index']);
