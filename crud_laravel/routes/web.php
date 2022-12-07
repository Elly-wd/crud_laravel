<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\EditaUsuarioController;
use App\Http\Controllers\CriaUsuarioController;
use Illuminate\Support\Facades\Route;
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


Route::get('/', [UsersController::class, 'viewShowUser']);
Route::get('/novo-usuario', [UsersController::class, 'viewNewUser']);
Route::post('/criar-novo-usuario', [UsersController::class, 'storeUser']);
Route::get('/editar-usuario/{id}', [UsersController::class, 'viewUpdateUser']);
Route::put('/salvar-usuario/{id}', [UsersController::class, 'updateUser']);
Route::delete('/deletar-usuario/{id}', [UsersController::class, 'destroyUser']);

