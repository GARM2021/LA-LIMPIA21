<?php

use App\Http\Controllers\BasuramcoloniaController; //!C1
use App\Http\Controllers\PostController;
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



Route::get('/colonias',[BasuramcoloniaController::class, 'getAllColonia'])->name('colonia.getallColonia'); //!C1