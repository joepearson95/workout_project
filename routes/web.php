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

//Check if the user is logged in on pages that arent the 'auth' pages
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'IndexController@index');
});
Auth::routes();
Route::get('logout', 'auth\LoginController@logout');
