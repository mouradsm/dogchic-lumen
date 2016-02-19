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

app('Dingo\Api\Transformer\Factory')->register('Cliente','ClienteTransformer');

$app->get('/', function () use ($app) {
    return $app->version();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->get('clientes',['as' => 'clientes.index', 'uses' => 'App\Http\Controllers\ClienteController@index']);
    $api->get('animais',['as' => 'animais.index', 'uses' => 'App\Http\Controllers\AnimalController@index']);
});

/*app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('clientes.index');*/