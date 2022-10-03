<?php

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
// Home Page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard Routes
Route::group(['as'=>'dashboard.'  ,'prefix'=>'dashboard'], function () {
    Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('index')->middleware('auth');

    // Pages Routes
    Route::resource('pages', App\Http\Controllers\PagesController::class)->middleware('roles:admin');
    // System get
    Route::get('/system', 'App\Http\Controllers\SystemController@index')->name('system.index')->middleware('auth', 'roles:admin');
    // System update
    Route::put('/system', 'App\Http\Controllers\SystemController@update')->name('system.update')->middleware('auth', 'roles:admin');
});

// Page Routes
Route::get('/page/{slug}', 'App\Http\Controllers\PageController@index')->name('page.index');

// Language Routes
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
