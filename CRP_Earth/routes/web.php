<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/userAdmin', function () {
    return view('userAdmin');
});

Auth::routes();

Route::get('/logout', [App\Http\Controllers\logoutController::class,'index'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/{userid}', [App\Http\Controllers\UserAdminController::class, 'show'])->name('user');

Route::get('/task', [App\Http\Controllers\taskController::class, 'show'])->name('task');

Route::get('/userSignUp', function () {
    return view('userSignUp');
});
Route::get('/userLogin', function () {
    return view('login');
});

Route::get('/loginUser', [App\Http\Controllers\loginController::class, 'check'])->name('loginUser');

Route::post('/signupUser', [App\Http\Controllers\signupUserController::class, 'check'])->name('signupUser');

Route::get('/newTask/{userid}', [App\Http\Controllers\newTaskController::class, 'show'])->name('newTask');
Route::get('/newTask2/{userid}', [App\Http\Controllers\newTask2Controller::class, 'show'])->name('newTask2');
Route::get('/newTask3/{userid}', [App\Http\Controllers\newTask3Controller::class, 'show'])->name('newTask3');
Route::get('/newTask4/{userid}', [App\Http\Controllers\newTask4Controller::class, 'show'])->name('newTask4');
Route::get('/newTask5/{userid}', [App\Http\Controllers\newTask5Controller::class, 'show'])->name('newTask5');
Route::get('/newTask6/{userid}', [App\Http\Controllers\newTask5Controller::class, 'show'])->name('newTask6');

