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

/*app('Dingo\Api\Transformer\Factory')->register('Cliente','ClienteTransformer');*/

/*$app->get('/', function () use ($app) {
    return $app->version();
});*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->get('clientes',                                     ['as' => 'clientes.index',            'uses' => 'App\Http\Controllers\ClienteController@index']);
    $api->get('clientes/{id}',                                ['as' => 'clientes.show',             'uses' => 'App\Http\Controllers\ClienteController@show']);
    $api->get('clientes/{cliente_id}/animais',                ['as' => 'clientes.animais.index',    'uses' => 'App\Http\Controllers\ClienteController@showAnimais']);
    $api->post('clientes',                                    ['as' => 'cliente.animais.show',      'uses' => 'App\Http\Controllers\ClienteController@store']);
    $api->post('clientes/{cliente_id}/animais/{animais_id}',  ['as' => 'cliente.animais.store',     'uses' => 'App\Http\Controllers\AnimalController@storeAnimais']); //TODO: Implementar
    $api->patch('clientes/{id}',                              ['as' => 'clientes.update',           'uses' => 'App\Http\Controllers\ClienteController@update']);
    $api->delete('clientes/{id}',                             ['as' => 'clientes.update',           'uses' => 'App\Http\Controllers\ClienteController@destroy']);
    $api->delete('clientes/{cliente_id}/animais/{animais_id}',['as' => 'cliente.animais.store',     'uses' => 'App\Http\Controllers\ClienteController@destroyAnimais']); //TODO: Implementar


    $api->get('animais',        ['as' => 'animais.index',  'uses' => 'App\Http\Controllers\AnimalController@index']);
    $api->get('animais/{id}',   ['as' => 'animais.show',   'uses' => 'App\Http\Controllers\AnimalController@show']);
    $api->post('animais',       ['as' => 'animais.show',   'uses' => 'App\Http\Controllers\AnimalController@store']);
    $api->patch('animais/{id}', ['as' => 'animais.update', 'uses' => 'App\Http\Controllers\AnimalController@update']);
    $api->delete('animais/{id}',['as' => 'animais.update', 'uses' => 'App\Http\Controllers\AnimalController@destroy']);
});

/*app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('clientes.index');*/