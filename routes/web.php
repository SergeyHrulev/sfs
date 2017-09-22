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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'servises'], function (){
    Route::get('/', 'ServisesController@index');
    Route::get('/{slug}', 'ServisesController@servise');
});

Route::group(['prefix' => 'articles'], function (){
    Route::get('/', 'ArticlesController@index');
    Route::get('/{slug}', 'ArticlesController@article');
});

Route::group(['prefix' => 'solutions'], function(){
    Route::get('/', 'SolutionsController@index');
    Route::get('/lom-chernyh-i-cvetnyh-metallov', 'SolutionsController@lom');
});

Route::get('/soglasie', function (){
   return view('pages.soglasie');
});

//Forms
Route::any('mail/consult', 'OrderController@consult');
Route::post('callback/order', 'OrderController@callback');

Route::group(['prefix' => 'events'], function (){
   Route::get('/', 'EventsController@index');
    Route::get('/{slug}', 'EventsController@event');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
