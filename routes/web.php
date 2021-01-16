<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Middleware\checkLogin;

use App\Http\Middleware\blockLogin;

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

Route::get('/condicionais', function (){
    return view('condicionais');
});

Route::get('/admin', function (){
    return view('admin');
});

Route::post('chamaFuncao', [HomeController::class, 'funcao']);
Route::post('novoPedido', [HomeController::class, 'novopedido']);
Route::get('pedido/{id}', [HomeController::class, 'loadPedido']);
Route::post('pedido', [HomeController::class, 'updatePedido']);
Route::post('checkLogin', [HomeController::class, 'checkLogin']);
Route::get('logout', [HomeController::class, 'logout']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/', [HomeController::class, 'loadHome']);

Route::middleware([checkLogin::class])->group(function () {
    Route::get('/fazerpedido', function () {
        return view('fazerpedido');
    });
    Route::get('/pedido', function () {
        return view('pedido');
    });
    Route::get('acompanharentrega', [HomeController::class, 'listaPedidos']);
    Route::get('/perfil', [HomeController::class, 'loadCliente']);
    Route::post('perfil', [HomeController::class, 'updateCliente']);
});

Route::middleware([blockLogin::class])->group(function () {
    Route::get('/logincadastro', function () {
        return view('logincadastro');
    });
    Route::get('/cadastro', function () {
        return view('cadastro');
    });
});