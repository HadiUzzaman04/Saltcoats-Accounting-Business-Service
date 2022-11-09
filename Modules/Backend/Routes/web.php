<?php

use Faker\Guesser\Name;
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

Route::prefix('admin')->group(function() {
    Route::get('/contactus', 'BackendController@contactus')->name('contactus');
    Route::get('/contactus/delete/{id}','BackendController@delete')->name('contactus.delete');

    //contact info
    Route::get('/contactinfo','ContactinfoController@contactinfo')->name('contactinfo');
    Route::post('/contactinfo/store','ContactinfoController@create')->name('contactinfo.store');
    Route::get('/contactinfo/delete/{id}','ContactinfoController@delete')->name('contactinfo.delete');
    Route::get('/contactinfo/edit/{id}','ContactinfoController@editcontactinfo')->name('contactinfo.edit');
    Route::put('/contactinfo/update/{id}','ContactinfoController@updatecontactinfo')->name('contactinfo.update');

    //service
    Route::get('/service','ServiceController@service')->name('admin.service');
    Route::post('/service/store','ServiceController@create')->name('service.store');
    Route::get('/service/delete/{id}','ServiceController@delete')->name('service.delete');
    Route::get('/service/edit/{id}','ServiceController@edit')->name('service.edit');
    Route::put('/service/update/{id}','ServiceController@update')->name('service.update');
    Route::get('/service/view/{id}','ServiceController@view')->name('service.view');
});
