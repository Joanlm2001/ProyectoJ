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
        redirect()->route('register');
    }
})->middleware(['auth:sanctum', 'verified']);


Route::get('/user/admin/stock', function () {
    if (Auth::user()->rol === 'admin') {
        return view('/user/admin/gestStock');
    } else {
        redirect()->route('register');
    }
})->name('Stock');

Route::get('/user/admin/users', function () {
    return view('/user/admin/gestUsers');
})->name('Usuarios');

Route::get('/user/admin/products', function () {
    return view('/user/admin/editProducts');
})->name('Productos');

//Ruta del cliente
Route::get('/user/client', function () {
    if (Auth::user()->rol === 'cliente') {
        return view('client');
    } else {
        redirect()->route('welcome');
    }
})->middleware(['auth:sanctum', 'verified']);


//Ruta del carrito

Route::get('/carrito', function () {
    return view('carrito');
});

//Ruta para la pagina de los usuarios
Route::resource('/cuenta', UserController::class)->parameters(['cuenta' => 'user'])->middleware(['auth']);

Route::resource('/productos', ProductController::class)->parameters(["productos" => "product"]);



//Ruta para las categorias
Route::resource('/categorias', CategoryController::class)->parameters((['categorias' => 'category']));

//Ruta para los estilos

Route::get('/estilos', function () {
    return view('/styles/index');
});

Route::get('/estilos/productos', function () {
    return view('/styles/show');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
