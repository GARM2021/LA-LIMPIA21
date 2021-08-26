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
/*Route::get('all-colonias',[BasuramcoloniaController::class,'getAllColoniasUsingModel'])->name('allcolonias-model');*/
Route::resource('colonias', 'BasuramcoloniaController'); //! C3 L48 


/*Route::get('colonias',[BasuramcoloniaController::class, 'getAllColonia'])->name('colonia.getallColonia');*/ //!C1

/*Route::get('colonias',[BasuramcoloniaController::class,'coloniasIndex'])->name('colonias.coloniasIndex');//!C2 L17

Route::post('colonias/store',[BasuramcoloniaController::class,'store'])->name('colonias.store');//!C2 L17

Route::get('colonias/create',[BasuramcoloniaController::class,'create'])->name('colonias.create');//!C2 L17

Route::get('colonias/{colonia}/edit',[BasuramcoloniaController::class,'edit'])->name('colonias.edit');//!C2 L17

Route::match(['put', 'patch'],'colonias/{colonia}',[BasuramcoloniaController::class,'update'])->name('colonias.update');//!C2 L17

Route::get('/colonias/{colonia}/show',[BasuramcoloniaController::class,'show'])->name('colonias.show');//!C2 L17

Route::delete('/colonias/{colonia}/destroy',[BasuramcoloniaController::class,'destroy'])->name('colonias.destroy');*/  //!C2 L17 
