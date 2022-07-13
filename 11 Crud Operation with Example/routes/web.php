<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VendorsController;


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

    Route::get('vendors/', [VendorsController::class, 'index']);
    Route::get('vendors/add', [VendorsController::class, 'addvendors']);
    Route::get('vendors/add/{id}', [VendorsController::class, 'addvendors']);
    Route::post('vendors/save', [VendorsController::class, 'savevendors']);
    Route::get('vendors/delete/{id}', [VendorsController::class, 'deletevendors']);
