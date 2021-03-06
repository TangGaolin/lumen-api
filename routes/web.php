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
$app->get('/', function () use ($app) {
    return response('403. Forbidden', 403);
});

//登录验证
$app->addRoute(['GET', 'POST'], 'api/auth/login', 'AuthController@login');

//中间件
$app->group(['prefix' => 'api', 'middleware' => 'web'], function () use ($app) {
    $app->addRoute(['GET'], '/login_info', 'AuthController@loginInfo');
});