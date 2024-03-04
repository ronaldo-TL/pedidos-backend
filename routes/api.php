<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HistorialCantidadController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RolPermisoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RolMenuController;
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });z
Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'index']); 
    Route::post('/', [UsuarioController::class, 'store']);
    Route::get('/{usuario}', [UsuarioController::class, 'show']); // Obtener un usuario por su ID
    Route::put('/{usuario}', [UsuarioController::class, 'update']); // Actualizar un usuario por su ID
    Route::delete('/{usuario}', [UsuarioController::class, 'destroy']); // Eliminar un usuario por su ID
});

Route::prefix('pedidos')->group(function () {
    Route::get('/', [PedidoController::class, 'index']);
    Route::post('/', [PedidoController::class, 'store']); 
    Route::get('/{pedido}', [PedidoController::class, 'show']); 
    Route::put('/{pedido}', [PedidoController::class, 'update']); 
    Route::delete('/{pedido}', [PedidoController::class, 'destroy']); 
});

Route::prefix('detalle-pedidos')->group(function () {
    Route::get('/', [DetallePedidoController::class, 'index']); 
    Route::post('/', [DetallePedidoController::class, 'store']);
    Route::get('/{detallePedido}', [DetallePedidoController::class, 'show']); 
    Route::put('/{detallePedido}', [DetallePedidoController::class, 'update']); 
    Route::delete('/{detallePedido}', [DetallePedidoController::class, 'destroy']); 
});

Route::prefix('productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index']);
    Route::post('/', [ProductoController::class, 'store']);
    Route::get('/{producto}', [ProductoController::class, 'show']);
    Route::put('/{producto}', [ProductoController::class, 'update']);
    Route::delete('/{producto}', [ProductoController::class, 'destroy']);
});


Route::prefix('historial-cantidades')->group(function () {
    Route::get('/', [HistorialCantidadController::class, 'index']);
    Route::post('/', [HistorialCantidadController::class, 'store']);
    Route::get('/{historial}', [HistorialCantidadController::class, 'show']);
    Route::put('/{historial}', [HistorialCantidadController::class, 'update']);
    Route::delete('/{historial}', [HistorialCantidadController::class, 'destroy']);
});

Route::prefix('roles')->group(function () {
    Route::get('/', [RolController::class, 'index']);
    Route::post('/', [RolController::class, 'store']);
    Route::get('/{rol}', [RolController::class, 'show']);
    Route::put('/{rol}', [RolController::class, 'update']);
    Route::delete('/{rol}', [RolController::class, 'destroy']);
});

Route::prefix('permisos')->group(function () {
    Route::get('/', [PermisoController::class, 'index']);
    Route::post('/', [PermisoController::class, 'store']);
    Route::get('/{permiso}', [PermisoController::class, 'show']);
    Route::put('/{permiso}', [PermisoController::class, 'update']);
    Route::delete('/{permiso}', [PermisoController::class, 'destroy']);
});

Route::prefix('rol-permisos')->group(function () {
    Route::get('/', [RolPermisoController::class, 'index']);
    Route::post('/', [RolPermisoController::class, 'store']);

});

Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index']);
    Route::post('/', [MenuController::class, 'store']);
    Route::get('/{menu}', [MenuController::class, 'show']);
    Route::put('/{menu}', [MenuController::class, 'update']);
    Route::delete('/{menu}', [MenuController::class, 'destroy']);
});

Route::prefix('rol-menu')->group(function () {
    Route::get('/', [RolMenuController::class, 'index']);
    Route::post('/', [RolMenuController::class, 'store']);

});