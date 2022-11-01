<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('home');
    });

Route::prefix('website')->group(function() {
    Route::get('/home', 'FrontendController@index')->name('home');
    Route::get('/accounting-service','FrontendController@accounting')->name('accounting');
    Route::get('/pitch-deck-service','FrontendController@deck')->name('deck');
    Route::get('/accounting-FAQ','FrontendController@accountingfaq')->name('accountingfaq');
    Route::get('/audit-service','FrontendController@audit')->name('audit');
    Route::get('/service-change-buget-review-by-rera','FrontendController@rera')->name('rera');
    Route::get('/home-owners-association','FrontendController@hoa')->name('hoa');
    Route::get('/ifrs-advisory-service','FrontendController@ifrs')->name('ifrs');
    Route::get('/audit-FAQ','FrontendController@auditfaq')->name('auditfaq');
    Route::get('/corporate-tax','FrontendController@corporatetax')->name('corporatetax');
    Route::get('/vat-consultant','FrontendController@vatconsultant')->name('vatconsultant');
    Route::get('/tax-FAQ','FrontendController@taxfaq')->name('taxfaq');
    Route::get('/aboutus','FrontendController@aboutus')->name('aboutus');

    //contactus
    Route::get('/contactus','ContactusController@contactus')->name('contactus');
    Route::post('/contactus/store','ContactusController@create')->name('contactus.store');
});
