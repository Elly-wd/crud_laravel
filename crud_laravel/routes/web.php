<?php

use App\Http\Controllers\ShowUsersController;
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


Route::get('/', [ShowUsersController::class, 'showUser']);
Route::get('/editar-usuario', [EditaUsuarioController::class, 'updateUser']);
Route::get('/novo-usuario', [CriaUsuarioController::class, 'viewNewUser']);
