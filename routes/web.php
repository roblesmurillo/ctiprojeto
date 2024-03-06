<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alomundo', function (){

    return "Olá mundo!";
});

Route::get ('produto/{codigoProduto?}', function ($codigoProduto=null){
    return "codigo produto $codigoProduto";
});

Route::post('/contato',  ['uses' => 'App\Http\Controllers\ContatoController@index']);