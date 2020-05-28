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

Route::get('/', 'HomeController@index')->name('index');
Route::post('/saveform', 'HomeController@saveform')->name('saveform');
Route::get('/form1/5I8F5d3d96', 'HomeController@showForm1')->name('showform1');
Route::get('/form2/0Ks2c6I92nl', 'HomeController@showForm2')->name('showform2');
Route::get('/form3/Jf84Sueo93', 'HomeController@showForm3')->name('showform3');
Route::post('/saveform', 'HomeController@saveform')->name('saveform');
Route::post('/contactform', 'HomeController@contactform')->name('contactform');
Route::post('/confirmform1', 'HomeController@confirmFormSave')->name('confirmform');
Route::post('/confirmform2', 'HomeController@confirmFormSave2')->name('confirmform2');
Route::post('/confirmform3', 'HomeController@confirmFormSave3')->name('confirmform3');

Route::namespace('Admin')->name('admin.')->prefix('administracja')->group(function () {

    Route::get('/', 'DashboardController@registers')->name('index');
    Route::get('/form/{form}', 'DashboardController@form')->name('form');
    Route::get('/forms', 'DashboardController@forms')->name('forms');
    Route::get('/data/{form}', 'DashboardController@data')->name('data');
    Route::get('/winner/{form}', 'DashboardController@winner')->name('winner');
    Route::get('/confirm/{form}', 'DashboardController@confirm')->name('confirm');
    Route::get('/mailtest', 'DashboardController@mailtest')->name('mailtest');
    Route::get('/getcsv', 'DashboardController@getCsv')->name('getcsv');
    Route::get('/getwinnerscsv', 'DashboardController@getWinnersCsv')->name('getwinnerscsv');
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        //  Route::get('/', 'DashboardController@days')->name('days');
        //   Route::get('/days', 'DashboardController@days')->name('days');
        //Route::get('/registers/{date}', 'DashboardController@registers')->name('registers');
    });


    Route::get('login', 'LoginController@index')->name('login');

});
Auth::routes();
