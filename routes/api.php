<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('c_tipos', App\Http\Controllers\API\C_tipoAPIController::class);

Route::resource('c_estados', App\Http\Controllers\API\C_estadoAPIController::class);

Route::resource('c_clinicas', App\Http\Controllers\API\C_clinicaAPIController::class);

Route::resource('t_usuarios', App\Http\Controllers\API\T_usuarioAPIController::class);

Route::resource('c_profesionals', App\Http\Controllers\API\C_profesionalAPIController::class);

Route::resource('c_estudiantes', App\Http\Controllers\API\C_estudianteAPIController::class);

Route::resource('t_casos', App\Http\Controllers\API\T_casosAPIController::class);

Route::resource('c_boletins', App\Http\Controllers\API\C_boletinAPIController::class);