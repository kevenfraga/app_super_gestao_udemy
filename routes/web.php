<?php

use App\Http\Controllers\PrincipalController;
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

Route::get('/', 'PrincipalController@index')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@index')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::post('/contato', 'ContatoController@index')->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('site.produtos');
});

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial.';
});
