<?php

use Illuminate\Support\Facades\Artisan;
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



Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/clear-cache', function () {
			$exitCode = Artisan::call('config:cache');
			$exitCode = Artisan::call('cache:clear');
			return 'DONE';
        });
        Route::get('/', 'IndexController@index')->name('index');
        Route::post('/contactus', 'IndexController@contactus')->name('contactus');
        Route::get('/reports', 'IndexController@reports')->name('reports');
        Route::get('/singlereport/{id}', 'IndexController@singlereport')->name('singlereport');
        Route::get('/actions', 'IndexController@actions')->name('actions');
        Route::get('/singleaction/{id}', 'IndexController@singleaction')->name('singleaction');
        Route::get('/managers', 'IndexController@managers')->name('managers');
        Route::get('/teams', 'IndexController@teams')->name('teams');
        Route::get('/programs', 'IndexController@programs')->name('programs');
        Route::get('/workprograms/{id}', 'IndexController@workprograms')->name('workprograms');
        Route::get('/singleprogram/{id}', 'IndexController@singleprogram')->name('singleprogram');
        Route::get('/stories', 'IndexController@stories')->name('stories');
        Route::get('/singlestory/{id}', 'IndexController@singlestory')->name('singlestory');
        Route::get('/news', 'IndexController@news')->name('news');
        Route::get('/singlenews/{id}', 'IndexController@singlenews')->name('singlenews');
        Route::get('/cactions', 'IndexController@cactions')->name('cactions');
        Route::get('/singlecaction/{id}', 'IndexController@singlecaction')->name('singlecaction');
        Route::get('/rules', 'IndexController@rules')->name('rules');
        Route::get('/singlerule/{id}', 'IndexController@singlerule')->name('singlerule');
        Route::get('/aboutus', 'IndexController@aboutus')->name('aboutus');
        Route::post('/enteremail', 'IndexController@enteremail')->name('enteremail');
        Route::get('/reload-captcha', 'IndexController@reloadCaptcha')->name('reloadCaptcha');
        Route::post('/programrequest', 'HomeController@programrequest')->name('programrequest');
        Route::get('/president', 'IndexController@president')->name('president');
        Route::get('/vision', 'IndexController@vision')->name('v_2030');
        Route::get('/gifts', 'IndexController@gifts')->name('gifts');
        Route::get('/supports', 'IndexController@supports')->name('supports');
        Route::get('/fields', 'IndexController@fields')->name('fields');
        
        //------ new updates 21-11-2023 ------

        Route::get('/statistics', 'IndexController@statistics')->name('statistics');


});
