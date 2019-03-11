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

Route::get('/', 'FrontendController@index');
Route::get('UZHeritage', 'FrontendController@UZHeritage')->name('Heritage');
Route::get('language', 'FrontendController@language')->name('Language');
Route::get('sport', 'FrontendController@sport')->name('Sport');
Route::get('complain', 'FrontendController@complain')->name('Complain');
Route::get('writer', 'FrontendController@writer')->name('Writer');
Route::get('writerDetails/{id}', 'FrontendController@writerDetails')->name('WriterDetails');
Route::get('player', 'FrontendController@player')->name('Player');
Route::get('playerDetails/{id}', 'FrontendController@playerDetails')->name('PlayerDetails');
Route::get('politician', 'FrontendController@politician')->name('Politician');
Route::get('politicianDetails/{id}', 'FrontendController@politicianDetails')->name('PoliticianDetails');
Route::get('actor', 'FrontendController@actor')->name('Actor');
Route::get('actorDetails/{id}', 'FrontendController@actorDetails')->name('ActorDetails');
Route::get('actress', 'FrontendController@actress')->name('Actress');
Route::get('actressDetails/{id}', 'FrontendController@actressDetails')->name('ActressDetails');
Route::get('union', 'FrontendController@union')->name('Union');
Route::get('unionDetails/{id}', 'FrontendController@unionDetails')->name('UnionDetails');

Route::auth();



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','Admin']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboardd');
    Route::resource('heritage','UZHeritageController');
    Route::resource('language','LanguageController');
    Route::resource('sport','SportController');
    Route::resource('writer','WriterController');
    Route::resource('player','PlayerController');
    Route::resource('politician','PoliticianController');
    Route::resource('actor','ActorController');
    Route::resource('actress','ActressController');
    Route::resource('union','UnionController');
    Route::resource('chairman','ChairmanController');
});

Route::group(['as' => 'officer.','prefix' => 'officer','namespace' => 'Officer','middleware' => ['auth','officer']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});




