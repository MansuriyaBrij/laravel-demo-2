<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewControllers;
use App\Http\Controllers\TempletControllers;
use App\Http\Controllers\FormController;
use App\Http\Controllers\validationController;
use App\Http\Controllers\DatashowController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\RequesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ShowtableController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\MaxminController;
use App\Http\Controllers\JoinsController;
use App\Http\Controllers\AccessorsController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\OnetooneController;
use App\Http\Controllers\OnetoManyController;
use App\Http\Controllers\FluentStringsController;
use App\Http\Controllers\RouteBindingController;
use App\Http\Controllers\MultipleDatabaseController;
use App\Mail\Mailui;


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


//12 Validation
Route::view('Validation', 'Validation');
Route::post('Valida',[validationController::class,'index']);

