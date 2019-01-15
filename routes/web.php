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
    return ('Pantalla principal');
});
Route::get('/auth/login', function () {
    return ('Login usuario');
});
Route::get('/auth/logout', function () {
    return ('Logout usuario');
});
Route::get('/catalog', function () {
    return ('Listado clientes');
});
Route::get('/catalog/show{id}', function () {
    return ('Detalles del clientes');
});
Route::get('/catalog/create', function () {
    return ('Alta clientes');
});
Route::get('/catalog/edit{id}', function () {
    return ('Modifica los datos del cliente');
});
Route::get('/catalog/delete{id}', function () {
    return ('Elimina los datos del cliente');
});
Route::get('/catalog/opcional/{op?}', function ($op = 'por defecto') {
    return ('Parametro opcional y por defecto ' . $op);
});
Route::post('/rutapost', function () {
    return ('Acceso por POST ');
});
Route::match(['get', 'post'],'/rutagetpost', function () {
    return ('Acceso por GET y POST indistintamente');
});
Route::get('numeros/{numero}', function ($numero) {
    return('introducidos dos numeros');
})->where('numero', '[0-9]{2}');

Route::get('numerosletras/{letras}/{numeros}', function ($letras,$numeros) {
    return('dos parámetros, el primero solo letras y el segundo solo números');
})->where(['letras'=>'[A-Za-z]+','numeros'=>'[0-9]+']);
