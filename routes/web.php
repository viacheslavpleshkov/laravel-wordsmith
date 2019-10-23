<?php
/**
 * Auth Router
 */
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
    Route::get('social/github', 'SocialController@redirectToProvider')->name('social.github');
    Route::get('social/github/callback', 'SocialController@handleProviderCallback');
});
/**
 * Admin Router
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'roles'], 'block' => ['User']], function () {
    Route::group(['roles' => ['Author', 'Moderator', 'Admin']], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
    });
    Route::group(['roles' => ['Moderator', 'Admin']], function () {
        Route::resource('pages', 'PageController');
        Route::resource('social-link', 'SociallinkController');
        Route::resource('subscribes', 'SubscribeController');
        Route::resource('articles', 'ArticleController');
        Route::resource('categories', 'CategoryController');
        Route::resource('comments', 'CommentsController');
    });
    Route::group(['roles' => ['Admin']], function () {
        Route::resource('users', 'UserController');
        Route::get('roles', 'RoleController@index')->name('roles.index');
        Route::get('role/{id}', 'RoleController@show')->name('roles.show');
        Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
        Route::put('roles/{id}', 'RoleController@update')->name('roles.update');
        Route::resource('seo', 'SeoController');
        Route::get('settings', 'SettingController@index')->name('settings.index');
        Route::put('settings', 'SettingController@update')->name('settings.update');
    });
});
/**
 * Site Router
 */
Route::namespace('Site')->group(function () {
    Route::get('/', 'SiteController@index')->name('site.index');
    Route::get('blog', 'ArticleController@index')->name('site.article.index');
    Route::get('blog/{url}', 'ArticleController@view')->name('site.article.view')->where('url', '[\w\d\-\_]+');
    Route::get('categories/{url}', 'CategoryController@view')->name('site.categories')->where('url', '[\w\d\-\_]+');

    Route::post('/{post}/comments', 'CommentsController@store');

    Route::get('styles', 'SiteController@styles')->name('site.styles');
    Route::get('about', 'SiteController@about')->name('site.about');
    Route::get('contact', 'SiteController@contact')->name('site.contact');
    Route::post('contact', 'SiteController@submit');
    Route::get('privacy-policy', 'SiteController@privacypolicy')->name('site.privacy-policy');

    Route::post('subscribe', 'SubscribeController@subscribe')->name('site.subscribe');
    Route::get('search', 'SiteController@search')->name('site.algolia');
    Route::middleware('auth')->group(function () {
        Route::get('profile', 'ProfileController@index')->name('profile.index');
        Route::get('profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
        Route::put('profile/{id}/edit', 'ProfileController@updateedit');
        Route::get('profile/{id}/password', 'ProfileController@password')->name('profile.password');
        Route::put('profile/{id}/password', 'ProfileController@updatepassword');
        Route::delete('profile/{id}', 'ProfileController@destroy')->name('profile.destroy');
    });
    Route::get('sitemap.xml', 'SitemapController@index')->name('sitemap.index');
    Route::get('sitemap/pages.xml', 'SitemapController@pages')->name('sitemap.pages');
    Route::get('sitemap/articles.xml', 'SitemapController@articles')->name('sitemap.articles');
    Route::get('sitemap/categories.xml', 'SitemapController@categories')->name('sitemap.categories');
});

