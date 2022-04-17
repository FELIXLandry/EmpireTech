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
route::post('/demande','DemandeController@demande');

route::get('/demande/{id}/open','DemandeController@open');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

route::get('/deconnexion','DemandeController@deconnexion');

route::get('/dashboard','DemandeController@dashboard')->middleware('auth');

route::get('/icons','DemandeController@icons')->middleware('auth');

route::get('/maps','DemandeController@maps')->middleware('auth');

route::get('/notifications','DemandeController@notifications')->middleware('auth');

route::get('/table','DemandeController@table')->middleware('auth');

route::get('/template','DemandeController@template')->middleware('auth');

route::get('/typography','DemandeController@typography')->middleware('auth');

route::get('/upgrade','DemandeController@upgrade')->middleware('auth');

route::get('/user','DemandeController@user')->middleware('auth');
