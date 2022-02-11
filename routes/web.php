<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
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

//Ruta para la pagina principal
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/productos',ProductController::class)->
        parameters(["productos"=>"product"]);


//Ruta para la pagina de los usuarios
Route::resource('/cuenta', UserController::class)->parameters(['cuenta'=>'user'])->middleware(['auth']);

//Borrar usuario
Route::resource('/borrarCuenta',UserController::class);

//Ruta para las categorias
Route::resource('/categorias',CategoryController::class)->parameters((['categorias'=>'category']));

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
