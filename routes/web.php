<?php

/* front end routes */
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::namespace('frontEnd')->group(function(){
            Route::get('/', function () {
                return view('frontEnd.index');
            });
            Route::get('/website','frontEndController@index')->name('website');
            Route::post('/contact_us','ContactController@store')->name('contact_us');
            Route::get('contact/{id}','ContactController@page')->name('contact-page');
            Route::get('register','userController@getRegister')->name('getRegister');
            Route::post('register','userController@postRegister')->name('postRegister');
            Route::get('/msg_register/{id}','userController@msgRegister')->name('msgRegister');
            Route::get('/login','userController@getLogin')->name('getLogin');
            Route::post('/login','userController@postLogin')->name('postLogin');
            Route::get('/profile/{id}','userController@profile')->name('profile')->middleware('auth');
            Route::put('edit/profile/{id}','userController@edit_profile')->name('edit-profile');
            Route::get('/logout','userController@logout')->name("logout");
        });

});

/* front end routes */

