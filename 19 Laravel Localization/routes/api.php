<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstAPIController;
use App\Http\Controllers\GetapiController;
use App\Http\Controllers\PostapiController;
use App\Http\Controllers\PutapiController;
use App\Http\Controllers\DeleteapiController;
use App\Http\Controllers\SearchAPIController;
use App\Http\Controllers\ValidationapiController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiFileUploadController;
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


Route::Post('ApiFileUpload',[ApiFileUploadController::class,'index']);