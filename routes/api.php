<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\MecanicaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\MovimentacaoEstoqueController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('produtos', ProdutoController::class);
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('estoques', EstoqueController::class);
Route::apiResource('mecanicas', MecanicaController::class);
Route::apiResource('pedidos', PedidoController::class);
Route::apiResource('administradores', AdministradorController::class);
Route::apiResource('movimentacoes', MovimentacaoEstoqueController::class);