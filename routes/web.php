<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Productocontroller;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider y todas serán asignadas al
| grupo de middleware "web". ¡Haz algo genial!
|
*/

Route::get('/', function () {
    return view('contacto');
});

Route::get('/productos', [Productocontroller::class, 'index'])->name('inicio_productos');
Route::get('/productos/create', [Productocontroller::class, 'create'])->name('crear_producto');
Route::post('/productos/guardar', [Productocontroller::class, 'almacenar'])->name('guardar_producto');
Route::get('/productos/editar/{id}', [ProductoController::class, 'editar'])->name('editar_producto');

Route::post('/productos/actualizar/{id}', [Productocontroller::class, 'actualizar'])->name('actualizar_producto');
Route::get('/productos/eliminar/{id}', [Productocontroller::class, 'eliminar'])->name('eliminar_producto');

Auth::routes();

Route::get('/auth/login', [Productocontroller::class, 'index'])->name('home');

// Rutas personalizadas para registro y inicio de sesión
Route::post('/auth/register', [RegisterController::class, 'almacenar'])->name('guardaporfa');
Route::get('/auth/register', [RegisterController::class, 'create'])->name('register_form');
Route::post('/auth/login',[LoginController::class, 'index'])->name('productos_index');
Route::get('/bienvenido', [LoginController::class,'bienvenido'])->name('lasfotos');

Route::get('/bienvenido', function () {
    return view('bienvenido');
})->name('bienvenido');
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/create', [ProductoController::class, 'create'])->name('create');
Route::get('/index', [ProductoController::class, 'index'])->name('index');















