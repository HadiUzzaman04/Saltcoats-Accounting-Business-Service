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

    //accounting faq
    Route::get('/accountingFAQ','AccountingController@accountingfaq')->name('accounting.faq');
    Route::post('/accountingfaq/store','AccountingController@create')->name('accountingfaq.store');
    Route::get('/accountingfaq/delete/{id}','AccountingController@delete')->name('accountingfaq.delete');
    Route::get('/accountingfaq/edit/{id}','AccountingController@edit')->name('accountingfaq.edit');
    Route::put('/accountingfaq/update/{id}','AccountingController@update')->name('accountingfaq.update');

    //audit faq
    Route::get('/auditFAQ','AuditController@auditfaq')->name('audit.faq');
    Route::post('/auditfaq/store','AuditController@create')->name('auditfaq.store');
    Route::get('/auditfaq/delete/{id}','AuditController@delete')->name('auditfaq.delete');
    Route::get('/auditfaq/edit/{id}','AuditController@edit')->name('auditfaq.edit');
    Route::put('/auditfaq/update/{id}','AuditController@update')->name('auditfaq.update');

    //tax faq
    Route::get('/taxFAQ','TaxController@taxfaq')->name('tax.faq');
    Route::post('/taxfaq/store','TaxController@create')->name('taxfaq.store');
    Route::get('/taxfaq/delete/{id}','TaxController@delete')->name('taxfaq.delete');
    Route::get('/taxfaq/edit/{id}','TaxController@edit')->name('taxfaq.edit');
    Route::put('/taxfaq/update/{id}','TaxController@update')->name('taxfaq.update');
});
