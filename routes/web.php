<?php

Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index')->name('site.index');
    Route::get('about-us', 'SiteController@aboutus')->name('site.about-us');
    Route::get('rules', 'SiteController@rules')->name('site.rules');
    Route::get('athletes', 'SiteController@aboutus')->name('site.athletes');
    Route::get('photo-gallery', 'SiteController@photogallery')->name('site.photo-gallery');
    Route::get('write-to-us', 'SiteController@write-to-us')->name('site.write-to-us');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
