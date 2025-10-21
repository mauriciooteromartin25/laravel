<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\Producto_MOM_Controller;

Route::get('/', [Producto_MOM_Controller::class, 'index'])->name('productos.index');
Route::get('/producto/{id}', [Producto_MOM_Controller::class, 'show'])->name('productos.show');

