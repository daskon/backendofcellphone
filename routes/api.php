<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/one-item', [
    'uses' => 'SingleProductController@getProduct'
]);

Route::get('/login', [
    'uses' => 'UserController@getLogin'
]);

Route::post('/login', [
    'uses' => 'UserController@postLogin'
]);

Route::get('/register', [
    'uses' => 'UserController@getRegister',
    'as' => 'users.register'
]);

Route::post('/register', [
    'uses' => 'UserController@storeUser',
    'as' => 'users.register'
]);

Route::get('/myaccount', ['uses' => 'UserController@getMyAccount']);

Route::post('/myaccount/{id}', ['uses' => 'UserController@uploadImage']);

Route::get('/logout', [
    'uses' => 'UserController@getLogout'
]);

Route::post('/newad', [
    'uses' => 'MobileDetailsController@store'
]);