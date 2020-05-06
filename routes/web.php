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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

	Route::layout('admin.theme1.master')->group(function () {

		Route::livewire('/users', 'admin.listing.users');

		Route::livewire('/create/user', 'admin.create.user');

	});

});
