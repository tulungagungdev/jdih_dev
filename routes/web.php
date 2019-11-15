<?php

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

// Route Home
Route::get('/', 'Frontend\HomeController@index')->name('frontend.home.index');

// Route Halaman
Route::group(['prefix' => 'page'], function () {
    Route::get('struktur-organisasi', 'Frontend\PagesController@strukturOrganisasiView')->name('frontend.pages.strukturOrganisasi');
    Route::get('dih', 'Frontend\PagesController@produkHukum')->name('frontend.pages.produkHukum');
});