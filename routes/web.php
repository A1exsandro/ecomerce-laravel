<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

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

Route::match(['get', 'post'], '/', [ ProdutoController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/categoria', [ ProdutoController::class, 'categoria'])->name('categoria');
Route::match(['get', 'post'], '/{idcategoria}/categoria', [ ProdutoController::class, 'categoria'])->name('categoria_by_id');
Route::match(['get', 'post'], '/register', [ ClienteController::class, 'index'])->name('register');
Route::match(['get', 'post'], '/client/register', [ ClienteController::class, 'registerClient'])->name('register_client');
Route::match(['get', 'post'], '/{idproduct}/cart/add', [ ProdutoController::class, 'addCart'])->name('add_cart');
Route::match(['get', 'post'], '/cart', [ ProdutoController::class, 'showCart'])->name('show_cart');
Route::match(['get', 'post'], '/{index}/deletecart', [ ProdutoController::class, 'deleteCart'])->name('delete_cart');