<?php

use WbPHPLibraryPackage\Service\System;

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

Route::group(['domain' => 'www.test.com'], function () {
    Route::group(['middleware' => [\App\Http\Middleware\CheckSystem::class]], function () {
        Route::get('/', 'Pc\IndexController@index')->name('pc');
        Route::get('/test', 'Pc\IndexController@test');
    });
});

Route::group(['domain' => 'm.test.com'], function () {
    Route::group(['middleware' => [\App\Http\Middleware\CheckSystem::class]], function () {
        Route::get('/', 'Mobile\IndexController@index')->name('mobile');
        Route::get('/test', 'Mobile\IndexController@test');
    });
});