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

Route::get('/', 'ViewController@index');
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/add', function () {
    return view('pages.add');
});
Route::get('/edit', function () {
    return view('pages.edit');
});
