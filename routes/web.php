<?php

/**
 * Protected Routing.
 */
Route::group([
    'middleware' => ['auth'],
], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::resource('client', 'ClientController');
});

Route::group([
    'middleware' => [],
], function () {
    Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

    // Registration Routes...
    Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@register']);

    // Password Reset Routes...
    Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\ForgotPasswordController@showResetForm']);
    Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\ForgotPasswordController@reset']);
});
