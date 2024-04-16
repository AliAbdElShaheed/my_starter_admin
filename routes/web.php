<?php

use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        // Route::get('/', 'WelcomeController@index')->name('welcome');
        Route::get('/', 'HomeController@index')->name('home');

        Route::get('/home', 'HomeController@index')->name('home');

        Auth::routes(['register' => false]);


    });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
