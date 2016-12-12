<?php

/**
 * Pages
 */
Route::get('/', 'PagesController@index');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('home', 'DashboardController@index');
Route::get('home/settings', 'DashboardController@settings');

/**
 * Collections
 */
Route::get('home/collections', 'CollectionsController@index');
Route::get('home/collections/new', 'CollectionsController@create');
Route::post('home/collections', 'CollectionsController@store');
