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

//Rotas da Pagina Inicial
Route::get('/ViewInicial'                                  , 'ControllerPrincipal@getViewInicial');

//Rotas do Funcionário
Route::get('/ViewInicial/ViewCadastroFuncionario'          , 'ControllerPrincipal@getViewCadastroFuncionario');
Route::get('/ViewInicial/ViewConsultaFuncionario'          , 'ControllerFuncionario@getSqlPadraoConsultaFuncionario');
Route::get('/ViewInicial/ViewConsultaFuncionarioTerritorio', 'ControllerFuncionario@getSqlConultaFuncionarioTerritorio');
Route::get('/ViewInicial/insereFuncionario'                , 'ControllerFuncionario@insereFuncionario');
Route::get('/ViewInicial/deleteFuncionario/{IDFuncionario}', 'ControllerFuncionario@deleteFuncionario');

//Rotas do Territorio
Route::get('/ViewInicial/ViewCadastroTerritorio'         , 'ControllerPrincipal@getViewCadastroTerritorio');
Route::get('/ViewInicial/ViewConsultaTerritorio'         , 'ControllerTerritorio@getSqlPadraoConsultaTerritorio');
Route::get('/ViewInicial/ViewAlteraTerritorio/{IDTerritorio}', 'ControllerTerritorio@getConsultaTerritorioFromUpdate');
Route::get('/ViewInicial/insereTerritorio'               , 'ControllerTerritorio@insereTerritorio');
Route::get('/ViewInicial/updateTerritorio'               , 'ControllerTerritorio@updateTerritorio');


//Rotas da Região
Route::get('/ViewInicial/ViewCadastroRegiao'         , 'ControllerPrincipal@getViewCadastroRegiao');
Route::get('/ViewInicial/ViewConsultaRegiao'         , 'ControllerRegiao@getSqlPadraoConsultaRegiao');
Route::get('/ViewInicial/ViewAlteraRegiao/{IDRegiao}', 'ControllerRegiao@getConsultaRegiaoFromUpdate');
Route::get('/ViewInicial/insereRegiao'               , 'ControllerRegiao@insereRegiao');
Route::get('/ViewInicial/updateRegiao'               , 'ControllerRegiao@updateRegiao');
Route::get('/ViewInicial/deleteRegiao/{IDRegiao}'    , 'ControllerRegiao@deleteRegiao');    