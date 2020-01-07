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

Route::get('/', 'DashboardController')->name('home');
Route::get('caregivers-directory', 'CaregiverDirectoryController')->name('caregivers-directory');

Route::get('agencies', 'AgencyController@index')->name('agencies.index');
Route::get('agencies/{agency}', 'AgencyController@show')->name('agencies.show');

Route::get('agencies/{agency}/caregivers/create', 'CaregiverController@create')->name('caregivers.create');
Route::post('agencies/{agency}/caregivers', 'CaregiverController@store')->name('caregivers.store');
Route::delete('agencies/{agency}/caregivers/{caregiver}', 'CaregiverController@destroy')->name('caregivers.destroy');
