<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::group(['as' => 'api.v1.'], function () {
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@index');
            Route::post('/create', 'CategoryController@create');
            Route::put('/edit/{id}','CategoryController@edit');
            Route::delete('/delete/{id}', 'CategoryController@destroy');
        });

        Route::group(['prefix' => 'department'], function () {
            Route::get('/', 'DepartmentController@index');
            Route::post('/create', 'DepartmentController@create');
            Route::put('/edit/{id}','DepartmentController@edit');
            Route::delete('/delete/{id}', 'DepartmentController@destroy');
        });
    });


});
