<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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
    return view('student');
});

Route::view('student', 'student');
// //post
// Route:: post('student', function () {
// return 'Welcome to student-page';
// });

// //put 
// Route:: put('student/add', function () {
// });

// //delete
// Route:: delete('student/delete', function () {
// //
// });

//Redirect
// Route::get('/student', function () {
//     return redirect('/studentpage');
// });
// Route::view('studentpage', 'student');

// //Parameter Pass
// Route :: get ('student/{id}', function ($id) {
//     return view('student',['id'=>$id]);
// });

// Route::group(['prefix' => 'student'], function () {
//     Route::get('/studentdata', [StudentController::class, 'index']);
// });
