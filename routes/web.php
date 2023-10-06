<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\UsersController;
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

Route::get('/users/', [UsersController::class, 'index']);

Route::get('/', function () {
    echo "hi there";
//    return view('welcome');
});

Route::get('/users/{id?}', [UsersController::class, 'index']);
