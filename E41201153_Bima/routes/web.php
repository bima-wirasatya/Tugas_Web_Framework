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

//Route::get('/', function () {
    //return view('form');
//});
Route::get('/', 'controllerKu@utama');
Route::get('/buku', 'controllerKu@buku');
Route::get('/petugas', 'controllerKu@petugas');
Route::get('/anggota', 'controllerKu@anggota');
