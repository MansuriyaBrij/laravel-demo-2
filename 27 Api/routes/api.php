<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('SearchApi/{name?}', [ApiController::class,'SearchApi']);
Route::get('GetApi', [ApiController::class,'GetApi']);
Route::Post('Postapi', [ApiController::class,'InsertPostApi']);
Route::put('Putapi', [ApiController::class,'PutApi']);
Route::delete('deleteapi/{id}', [ApiController::class,'DeleteApi']);