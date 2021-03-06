<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('paciente', 'PacienteController');
	Route::get('paciente.create_update/{id?}', 'PacienteController@create_update')->name('paciente.create_update');
	Route::get('paciente.view_full/{id?}', 'PacienteController@view_full')->name('paciente.view_full');
	Route::post('paciente.store_with_relations', 'PacienteController@store_with_relations')->name('paciente.store_with_relations');
	Route::resource('domicilio', 'DomicilioController');
	
	Route::get('paciente.prueba/{id}', 'PacienteController@prueba')->name('paciente.prueba');
});
