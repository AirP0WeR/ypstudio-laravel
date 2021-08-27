<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})-> name('home');


Route::get('/logo', 'App\Http\Controllers\YPController@indexFoto')-> name('logo');


Route::get('/brandbook', function () {
    return view('brandbook');
})-> name('brandbook');

Route::get('/grafics', function () {
    return view('grafics');
})-> name('grafics');

Route::get('/painting', function () {
    return view('painting');
})-> name('painting');


Route::get('/contacts', function () {
    return view('contacts');
})-> name('contacts');



Route::post('/sendinfo', 'App\Http\Controllers\YPController@sendInfoToDB')-> name('sendinfo');