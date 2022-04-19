<?php

use App\Models\Docteur;
use App\Models\Question;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
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
    $services = Service::all();
    $docteurs = Docteur::all();
    $questions = Question::all();
    return view('welcome')->with(compact('services','docteurs','questions'));
});
Route::post('/demande','DemandeController@demande');

Route::get('/demande/{id}/open','DemandeController@open');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/deconnexion','DemandeController@deconnexion');

Route::get('/dashboard','DemandeController@dashboard')->middleware('auth');

Route::resource('/services','Admin\ServiceController')->middleware('auth');
Route::resource('/docteurs','Admin\DocteurController')->middleware('auth');
Route::resource('/questions','Admin\QuestionController')->middleware('auth');
