<?php
Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
    Route::get('socialite/{provider}', 'AuthController@redirectToProvider');
    Route::get('socialite/{provider}/callback', 'AuthController@handleProviderCallback');
});
Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'roles'], 'block' => ['User']], function () {
    Route::group(['roles' => ['Author', 'Moderator', 'Admin']], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
    });
    Route::group(['roles' => ['Moderator', 'Admin']], function () {
    });
    Route::group(['roles' => ['Admin']], function () {
        Route::resource('users', 'UserController');
        Route::get('roles', 'RoleController@index')->name('roles.index');
        Route::get('role/{id}', 'RoleController@show')->name('roles.show');
        Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
        Route::put('roles/{id}', 'RoleController@update')->name('roles.update');
        Route::get('settings', 'AdminController@settings')->name('admin.settings');
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('admin.logs');
    });
});
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'NewsController@index')->name('site.index');
    Route::get('news/{url}', 'NewsController@views')->name('news.views')->where('url', '[\w\d\-\_]+');
    Route::get('author/{url}', 'NewsController@views')->name('author.views')->where('url', '[\w\d\-\_]+');
    Route::get('categories/{url}', 'CategoryController@views')->name('categories.views')->where('url', '[\w\d\-\_]+');
    Route::get('tag/{url}', 'NewsController@views')->name('tag.views')->where('url', '[\w\d\-\_]+');
    Route::get('search', 'SearchController@views')->name('search.views')->where('url', '[\w\d\-\_]+');
    Route::get('about-us', 'SiteController@aboutus')->name('site.about-us');
    Route::get('rules', 'SiteController@rules')->name('site.rules');
    Route::get('athletes', 'SiteController@athletes')->name('site.athletes');
    Route::get('photo-gallery', 'SiteController@photogallery')->name('site.photo-gallery');
    Route::get('write-to-us', 'SiteController@writetous')->name('site.write-to-us');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('profile', 'ProfileController@index')->name('profile.index');
        Route::get('profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
        Route::put('profile/{id}/updateedit', 'ProfileController@updateedit')->name('profile.updateedit');
        Route::get('profile/{id}/password', 'ProfileController@password')->name('profile.password');
        Route::put('profile/{id}/updatepassword', 'ProfileController@updatepassword')->name('profile.updatepassword');
        Route::delete('profile/{id}', 'ProfileController@destroy')->name('profile.destroy');
    });
});