<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('produtos', [ProdutosController::class, 'index']);
Route::get('produtos/{id}', [ProdutosController::class, 'show']);
Route::post('produtos', [ProdutosController::class, 'store']);
Route::put('produtos/{id}', [ProdutosController::class, 'update']);
Route::delete('produtos/{id}', [ProdutosController::class, 'update']);
