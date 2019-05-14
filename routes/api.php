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
Route::group(['prefix' => 'v1','namespace' => 'Api\v1'], function () {
    Route::get('articles', 'ArticleController@index');
    Route::get('categories/{id}', 'CategoryController@index');
    Route::get('comments/{id}', 'CommentController@index');
});
