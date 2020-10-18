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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('principal', 'PrincipalController@noticias')->middleware('auth');
Route::get('graficos', 'GraficoController@index')->middleware('auth');
Route::get('mapas', 'MapaController@index');
Route::get('tests', 'TestController@index')->middleware('auth');
Route::get('detalles/{seoSlug}', ['as' => 'detalle', 'uses' => 'NoticiaController@detalle']);

Route::get('apipacientes', 'ApiController@index');

Route::resource('users', 'UserController');

 

Route::resource('noticias', 'NoticiaController');