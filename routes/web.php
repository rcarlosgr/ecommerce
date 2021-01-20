<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('ingresar', function () {
    return view('auth/login');
});
Route::get('recuperacion', function () {
    return view('auth/recuperation');
});
// Route::get('registro-admin', function () {
//     return view('auth/register_user');
// });
Route::get('/registro', [CustomerController::class, 'create']);
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::post('/customer/validate-login', [CustomerController::class, 'validateLogin']);
Route::get('/customer/cerrar-sesion', [CustomerController::class, 'logout']);
//rutas de productos
Route::get('productos/{id}', [ProductController::class, 'show']);

