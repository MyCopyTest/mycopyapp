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

Route::group(['middleware' => 'web'], function () {

    Route::group(array('domain' => Config::get('app.domain_without_www')), function()
    {
        Route::get('/', function() {
            return Redirect::to('http://' . Config::get('app.domain'));
        });
    });

    Route::group(array('domain' =>  Config::get('app.domain')), function () {
        $nameSpace = 'Geral';
        $nameSpaceWithSlash = $nameSpace . '\\';

        Route::get('/',                                                             ['uses' => $nameSpaceWithSlash . 'IndexController@index']);

        Route::group(array('namespace' => $nameSpace, 'prefix' => 'exemplo'), function () {
            $controller = 'IndexController';
            Route::get('/',                                                          ['uses' => $controller . '@example']);
        });

    });

});
