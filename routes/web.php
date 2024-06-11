<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Route::get('/', function () {
//     return view('welcome');
// });

    
//rutas para los usuarios
Route::get('api/users', [UserController::class, 'index'])->name('api.users');
Route::get('api/users/create', [UserController::class, 'create'])->name('api.users.create');
Route::post('api/users', [UserController::class, 'store'])->name('api.users.store');
Route::get('api/users/{id}/edit', [UserController::class, 'edit'])->name('api.users.edit');
Route::put('api/users/{id}', [UserController::class, 'update'])->name('api.users.update');
Route::delete('api/users/{id}', [UserController::class, 'destroy'])->name('api.users.destroy');


//rutas para los proveedor
Route::get('api/proveedor', [ProveedorController::class, 'index'])->name('api.proveedor');
Route::get('api/proveedor/create', [ProveedorController::class, 'create'])->name('api.proveedor.create');
Route::post('api/proveedor', [ProveedorController::class, 'store'])->name('api.proveedor.store');
Route::get('api/proveedor/{id}/edit', [ProveedorController::class, 'edit'])->name('api.proveedor.edit');
Route::put('api/proveedor/{id}', [ProveedorController::class, 'update'])->name('api.proveedor.update');
Route::delete('api/proveedor/{id}', [ProveedorController::class, 'destroy'])->name('api.proveedor.destroy');

//rutas para la categoria
Route::get('api/categoria', [CategoriaController::class, 'index'])->name('api.categoria');
Route::get('api/categoria/create', [CategoriaController::class, 'create'])->name('api.categoria.create');
Route::post('api/categoria', [CategoriaController::class, 'store'])->name('api.categoria.store');
Route::get('api/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('api.categoria.edit');
Route::put('api/categoria/{id}', [CategoriaController::class, 'update'])->name('api.categoria.update');
Route::delete('api/categoria/{id}', [CategoriaController::class, 'destroy'])->name('api.categoria.destroy');

//rutas para la sub_categoria
Route::get('api/sub_categoria', [Sub_categoriaController::class, 'index'])->name('api.sub_categoria');
Route::get('api/sub_categoria/create', [Sub_categoriaController::class, 'create'])->name('api.sub_categoria.create');
Route::post('api/sub_categoria', [Sub_categoriaController::class, 'store'])->name('api.sub_categoria.store');
Route::get('api/sub_categoria/{id}/edit', [Sub_categoriaController::class, 'edit'])->name('api.sub_categoria.edit');
Route::put('api/sub_categoria/{id}', [Sub_categoriaController::class, 'update'])->name('api.sub_categoria.update');
Route::delete('api/sub_categoria/{id}', [Sub_categoriaController::class, 'destroy'])->name('api.sub_categoria.destroy');

//rutas para los productos
Route::get('api/productos', [productosController::class, 'index'])->name('api.productos');
Route::get('api/productos/create', [productosController::class, 'create'])->name('api.productos.create');
Route::post('api/productos', [productosController::class, 'store'])->name('api.productos.store');
Route::get('api/productos/{id}/edit', [productosController::class, 'edit'])->name('api.productos.edit');
Route::put('api/productos/{id}', [productosController::class, 'update'])->name('api.productos.update');
Route::delete('api/productos/{id}', [productosController::class, 'destroy'])->name('api.productos.destroy');

//rutas para los inventario
Route::get('api/inventario', [inventarioController::class, 'index'])->name('api.inventario');
Route::get('api/inventario/create', [inventarioController::class, 'create'])->name('api.inventario.create');
Route::post('api/inventario', [inventarioController::class, 'store'])->name('api.inventario.store');
Route::get('api/inventario/{id}/edit', [inventarioController::class, 'edit'])->name('api.inventario.edit');
Route::put('api/inventario/{id}', [inventarioController::class, 'update'])->name('api.inventario.update');
Route::delete('api/inventario/{id}', [inventarioController::class, 'destroy'])->name('api.inventario.destroy');

// Rutas para el pedido
Route::get('api/pedido', [PedidoController::class, 'index'])->name('pedidos');
Route::post('api/pedido/{id}/cambiar-estado', [PedidoController::class, 'cambiar_estado'])->name('cambiar_estado');
Route::get('api/pedido/{id}/detalles', [PedidoController::class, 'mostrar'])->name('pedidos.detalles');

// Rutas para el detalle
Route::get('api/detalle', [DetalleController::class, 'index'])->name('detalles');
