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
    return view('home',array('mensaje'=>'Esta es mi primera vista en laravel'));
});
Route::get('/fecha', function () {
    
    return view('fecha',array('dia'=>date("d"),'mes'=>date("F"),'año'=>date("Y")));
});
