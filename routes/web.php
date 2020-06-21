<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('empresas',  ['uses' => 'EmpresaContoller@listaEmpresas']);
  
    $router->get('empresa/{id}', ['uses' => 'EmpresaContoller@empresaPorId']);
  
    $router->post('empresa', ['uses' => 'EmpresaContoller@criaEmpresa']);
  
    $router->delete('empresa/{id}', ['uses' => 'EmpresaContoller@deletaEmpresa']);
  
    $router->put('empresa/{id}', ['uses' => 'EmpresaContoller@atualisaEmpresa']);
});