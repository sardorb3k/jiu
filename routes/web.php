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
Route::get('/example', [App\Http\Controllers\PageController::class, 'example'])->name('example');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact_store'])->name('contact_store');
Route::get('/jobs', [App\Http\Controllers\HomeController::class, 'jobs'])->name('jobs');

// Dashboard Routes
Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('index')->middleware('auth');

    // Pages Routes
    Route::resource('pages', App\Http\Controllers\PagesController::class)->middleware('roles:admin');
    Route::resource('voucher', App\Http\Controllers\StudentsController::class)->middleware('roles:admin,voucher');
    // System get
    Route::get('/system', 'App\Http\Controllers\SystemController@index')->name('system.index')->middleware('auth', 'roles:admin');
    // System update
    Route::put('/system', 'App\Http\Controllers\SystemController@update')->name('system.update')->middleware('auth', 'roles:admin');
});

// Page Routes
Route::get('/page/{slug}', 'App\Http\Controllers\PageController@index')->name('page.index');

// Language Routes
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
