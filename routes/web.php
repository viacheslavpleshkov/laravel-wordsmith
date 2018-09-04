<?php
Route::namespace('Site')->group(function () {
    Route::get('/', 'SiteController@index')->name('site.index');
});


