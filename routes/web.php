<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


//Rutas del admin
Route::get('/user/admin', function () {
    if (Auth::user()->rol === 'admin') {
        return view('/user/admin/index');
    } else {
        redirect()->route('/user');
    }
})->middleware(['auth:sanctum', 'verified']);

Route::get('/user/admin/editProducts', function () {
    if(!is_object(Auth::user())){
        echo "No es un objeto";
        return;
    }
    if (Auth::user()->rol === 'admin') {
        return view('user/admin/editProducts');
    } else {
        redirect()->route('/user');
    }
});


Route::get('/user/client', function () {
    if (Auth::user()->rol === 'cliente') {
        return view('clientProfile');
    } else {
        redirect()->route('/user');
    }
})->middleware(['auth:sanctum', 'verified']);

//La que veras en casso de que no lo estes

//Ruta para la pagina de los usuarios
Route::resource('/cuenta', UserController::class)->parameters(['cuenta' => 'user'])->middleware(['auth']);

Route::resource('/productos', ProductController::class)->parameters(["productos" => "product"]);



//Ruta para las categorias
Route::resource('/categorias', CategoryController::class)->parameters((['categorias' => 'category']));

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard');
