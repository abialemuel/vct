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
    return view('index');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/rute', function () {
    return view('rutes');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/comingsoon', function () {
    return view('comingsoon');
});





Route::post('/sendmail', 'sendmailController@index');
Route::post('/pesan', 'PesanController@set');
Route::post('/pesan/rute', 'PesanRuteController@set');
Route::post('/done', 'bookController@store');

Route::get('/tes', 'bookController@tes');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');


Route::get('rute/{iditem}', 'ItemController@item');


Auth::routes();
