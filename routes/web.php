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


Route::get("/", function () {
    return redirect("acceso/login");
});


Route::get("test/{texto}","LoginController@test");

Route::group(["prefix"=>'acceso'], function () {
    Route::get('login', "LoginController@index");
    Route::post('login', "LoginController@store");
    Route::get('logout', "LoginController@logout");
});




Route::get('dashboard', 'DashboardController@index');
