<?php 
    /* Back End routes **/
    Route::namespace('Dashbord')->prefix('dashbord')->group(function(){
        Route::get('/login','DashbordController@getLogin')->name('login');
        Route::post('/login','DashbordController@postLogin')->name('loginPost');
        Route::get('/index','DashbordController@index')->name('dashbord.index')->middleware(['auth','is_admin']);
        Route::get('/logout','DashbordController@logout')->name("dashbord.logout");
        /* users route */
        Route::resource('/users','UserController')->middleware(['auth','is_admin']);
        /* users route */
        /* messages route */
        Route::resource('/messages','messagesController')->middleware(['auth','is_admin']);
        /* messages route */
    });
/* Back End routes **/



?>