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
Route::view('/', 'accueil.index')->name('accueil');

Route::group(['middleware' => 'auth'],function (){
    Route::resource('enfants', 'EnfantController')->except([
        'show'
    ]);
    Route::resource('responsables', 'ResponsableController')->except([
        'show'
    ]);
    Route::resource('taches', 'TacheController')->except([
        'show','edit','update','index'
    ]);
    Route::get('taches', 'TacheController@index')->name('taches.index');
    Route::get('taches/{tache}/edit', 'TacheController@edit')->name('taches.edit');
    Route::patch('taches/{tache}', 'TacheController@update')->name('taches.update');





    Route::resource('bonspoints', 'BonPointController')->except([
        'show']);
    Route::resource('categoriestaches', 'CategorieTacheController')->except([
        'show'
    ]);

    Route::get('enfants/{enfant}/confirmation', 'EnfantController@confirmation')->name('enfants.confirmation');
    Route::get('responsables/{responsable}/confirmation', 'ResponsableController@confirmation')->name('responsables.confirmation');
    Route::get('categoriestaches/{categorietache}/confirmation', 'CategorieTacheController@confirmation')->name('categoriestaches.confirmation');
    Route::get('taches/{tache}/confirmation', 'TacheController@confirmation')->name('taches.confirmation');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
