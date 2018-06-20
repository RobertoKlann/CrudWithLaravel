<?php

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

Route::get('/ViewInicial/ViewConsultaFuncionario', 'ControllerFuncionario@getSqlPadraoConsultaFuncionario');
Route::get('/ViewInicial/ViewConsultaTerritorio', 'ControllerTerritorio@getSqlPadraoConsultaTerritorio');
Route::get('/ViewInicial/ViewConsultaRegiao', 'ControllerRegiao@getSqlPadraoConsultaRegiao');
        

//Route::get('/produto/mostra/{id}', function($id){
//    $controller = new App\Http\Controllers\ProdutoController;
//    echo $controller->mostra($id);
//});
//
//Route::get('/produto/novo', 'ProdutoController@novo');

Route::get('/ViewInicial', 'ControllerPrincipal@getViewInicial');