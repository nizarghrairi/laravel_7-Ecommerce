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
define('PAGINATION_COUNT',10);
Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'], function () {

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

    #################################Begin Language Route#######################################
    Route::group(['prefix' => 'languages'], function () {
       Route::get('/','LanguagesController@index')->name('admin.languages');
       Route::get('create','LanguagesController@create')->name('admin.languages.create');
       Route::post('store','LanguagesController@store')->name('admin.languages.store');
        });
    #################################End Language Route#######################################
});


Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'], function () {
    Route::get('login', 'LoginController@getLogin') ->name('get.admin.login');
    Route::post('login', 'LoginController@Login')->name('admin.login');
});
