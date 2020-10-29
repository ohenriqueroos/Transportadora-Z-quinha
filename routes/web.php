<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
//     return view('home');
// });

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::get('/logincadastro', function () {
    return view('logincadastro');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/fazerpedido', function () {
    return view('fazerpedido');
});

Route::get('/acompanharentrega', function () {
    return view('acompanharentrega');
});

Route::post('chamaFuncao', [HomeController::class, 'funcao']);
Route::post('novoPedido', [HomeController::class, 'novopedido']);

// Route::post('listaPedidos', [HomeController::class, 'listapedidos']);
// Route::get('novoPedido', [HomeController::class, 'pedido']);
// Route::get('acompanharentrega', [HomeController::class, 'listaPedidos']);
Route::get('/', [HomeController::class, 'loadHome']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
