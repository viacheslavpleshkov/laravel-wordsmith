<?php
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetFormcd')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
    Route::get('socialite/{provider}', 'AuthController@redirectToProvider');
    Route::get('socialite/{provider}/callback', 'AuthController@handleProviderCallback');
});
Route::namespace('Site')->group(function () {
    Route::get('/', 'SiteController@index')->name('site.index');
    Route::get('blog', 'SiteController@blog')->name('site.blog');
    Route::get('styles', 'SiteController@styles')->name('site.styles');
    Route::get('about', 'SiteController@about')->name('site.about');
    Route::get('contact', 'SiteController@contact')->name('site.contact');
    Route::get('privacy-policy', 'SiteController@privacy-policy')->name('site.privacy-policy');
});


