<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

// Ruta para listar productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Ruta para mostrar el formulario de creación de un producto
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Ruta para almacenar un nuevo producto
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

//Ruta para mostrar el show de un producto
Route::get('/products/{products}', [ProductController::class, 'show'])->name('products.show');

//Ruta para editar un producto
Route::get('/products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');

//Ruta para mostrar actualizar un producto
Route::patch('/products/{products}', [ProductController::class, 'update'])->name('products.update');

//Ruta para eliminar un producto
Route::delete('/products/{products}', [ProductController::class, 'destroy'])->name('products.destroy');
