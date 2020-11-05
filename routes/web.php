<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', [
    'uses'=>'PintoresController@inicio',
    'as'=>'inicio'
]);

Route::get('leonardo', [
    'uses'=>'PintoresController@index',
    'as'=>'leonardo'
]);

Route::get('vicent', [
    'uses'=>'PintoresController@index1',
    'as'=>'vicent'
]);

Route::get('tamara', [
    'uses'=>'PintoresController@index2',
    'as'=>'tamara'
]);

Route::get('jackson', [
    'uses'=>'PintoresController@index3',
    'as'=>'jackson'
]);