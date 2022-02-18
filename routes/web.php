<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
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
})->name('index');

Route::get('/error', function () {
    return view('/errors/404');
})->name('error');


/* //Rutas del admin
Route::get('/user/admin', function () {
    if (Auth::user()->rol === 'admin') {
        return view('/user/admin/index');
    } else {
        redirect()->route('register');
    }
})->middleware(['auth:sanctum', 'verified']); */

/* Route::get('admin/products', function() {
    $products = Product::all();
    return view('admin/products', compact('products'));
})->name('Productos')->middleware('admin'); */
//Rutas del admin: Activar para entrar a vista Admin sin loguearte
Route::get('/user/admin', function () {
         return view('/user/admin/index');
});

Route::get('/user/admin/stock', function () {
        return view('/user/admin/gestStock');
})->name('Stock');

Route::get('/user/admin/users', function () {
    return view('/user/admin/gestUsers');
})->name('Usuarios');

Route::get('/user/admin/products', function () {
    return view('/user/admin/editProducts');
})->name('Productos');

//Ruta del cliente
Route::get('client', function () {
        return view('/user/client');
});


//Ruta del carrito
Route::get('carrito', function () {
    return view('/user/carrito');
});

//Ruta para la pagina de los usuarios
Route::resource('/cuenta', UserController::class)->parameters(['cuenta' => 'user'])->middleware(['auth']);

Route::resource('/productos', ProductController::class)->parameters(["productos" => "product"]);

Route::resource('/categorias', CategoryController::class)->parameters((['categorias' => 'category']));

//Ruta para las categorias
Route::get('/accesorios', function () {
    $products= Product::where('category','accesorios')->get();
    return view('/categories/accesorios',compact('products'));
})->name('accesorios');

Route::get('/espejos', function () {
    $products= Product::where('category','Espejos')->get();
    return view('/categories/espejos',compact('products'));
})->name('espejos');

Route::get('/muebles', function () {
    $products= Product::where('category','Muebles')->get();
    return view('/categories/muebles',compact('products'));
})->name('muebles');

Route::get('/patas', function () {
    return view('/categories/patas');
})->name('patas');

Route::get('listacategorias', function(){
    return view('/categories/show');
})->name('listacategorias');
/* Route::get('/categorias', function () {
    return view('/categories/index');
})->name('categorias'); */


//Ruta para los estilos
Route::get('/boho', function () {
    $products= Product::where('style','Boho')->get();
    return view('/styles/boho',compact('products'));
})->name('espejos');

Route::get('/boho', function () {
    $products= Product::where('style','Boho')->get();
    return view('/styles/boho',compact('products'));
})->name('boho');

Route::get('/glamour', function () {
    $products= Product::where('style','Glamour')->get();
    return view('/styles/glamour',compact('products'));
})->name('glamour');

Route::get('/industrial', function () {
    $products= Product::where('style','Industrial')->get();
    return view('/styles/industrial',compact('products'));
})->name('industrial');


Route::get('/nordico', function () {
    $products= Product::where('style','Iordico')->get();
    return view('/styles/nordico',compact('products'));
})->name('nordico');

/* Route::get('/estilos', function () {
    return view('/styles/index');
}); */


Route::get('/products/index', function () {
    return view('/products/index');
});
//Rutas footer
Route::get('/politica', function () {
    return view('policy');
})->name('policy');

Route::get('/terminos', function () {
    return view('terms');
})->name('terminos');

Route::get('/galletas', function () {
    return view('coockies');
})->name('galletas');

Route::get('/nosotros', function () {
    return view('about');
})->name('nosotros');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
