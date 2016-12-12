<?php

Route::group(['domain' => 'geosift.dev'], function() {
	/**
	 * Pages
	 */
	Route::get('/', 'PagesController@index');
	Route::get('contact', 'PagesController@contact');
	Route::get('about', 'PagesController@about');
});

Route::group(['domain' => '{account}.geosift.dev', 'middleware' => 'web'], function() {
	Auth::routes();
	Route::get('logout', 'Auth\LoginController@logout');

	Route::get('/', 'DashboardController@index');
	Route::get('settings', 'DashboardController@settings');

	/**
	 * Collections
	 */
	Route::get('collections', 'CollectionsController@index');
	Route::get('collections/new', 'CollectionsController@create');
	Route::post('collections', 'CollectionsController@store');
	Route::get('collections/{collection}', 'CollectionsController@show');
	Route::get('collections/{collection}/entries/new', 'EntriesController@create');
	Route::post('collections/{collection}/entries', 'EntriesController@store');
	Route::get('collections/{collection}/entries', 'EntriesController@index');

	Route::post('collections/{collection}/fields', 'FieldsController@store');
});
