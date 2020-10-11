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
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('Auth.login');
});

Auth::routes();

Route::get('/kirim-tugas', 'HomeController@index')->name('home');
Route::post('/kirim-tugas/save', 'HomeController@save_tugas');

Route::get('/absen', 'HomeController@absen');


Route::get('/lihat-nilai', 'HomeController@lihatnilai');
Route::post('/lihat-nilai/check', 'HomeController@checknilai');




// Admin
Route::get('/dashboard', 'AdminController@dashboard');
// kategori
Route::get('/dashboard/kategori', 'AdminController@kategori');
Route::post('/dashboard/kategori/save', 'AdminController@save_kategori');
Route::get('/dashboard/kategori/delete/{id}', 'AdminController@delete_kategori');
// murid
Route::get('/dashboard/data_murid', 'AdminController@data_murid');
Route::get('/dashboard/search', 'AdminController@search');
Route::get('/dashboard/akun_murid', 'AdminController@akun_murid');
Route::post('/dashboard/data_murid/save', 'AdminController@save_murid');
Route::get('/dashboard/data_murid/delete/{id}', 'AdminController@delete_murid');
Route::get('/dashboard/data_murid/edit/{id}', 'AdminController@edit_murid');
Route::post('/dashboard/data_murid/update/{id}', 'AdminController@update_murid');
Route::post('data_murid/naik', 'AdminController@naik');

// buku
Route::get('/dashboard/databuku', 'AdminController@databuku');


// data guru
Route::get('/dashboard/data_guru', 'AdminController@data_guru');
Route::post('/dashboard/data_guru/save', 'AdminController@save_guru');
Route::get('/dashboard/data_guru/delete/{id}', 'AdminController@delete_guru');
Route::get('/dashboard/data_guru/delete/{id}', 'AdminController@delete_guru');


// tugas
Route::get('/dashboard/data_tugas', 'AdminController@buat_tugas');
Route::post('/dashboard/data_tugas/save', 'AdminController@save_tugas');
Route::get('/dashboard/data_tugas/{id}', 'AdminController@open_tugas');
Route::post('/dashboard/data_tugas/berinilai/{id}', 'AdminController@update_nilai');
Route::post('/dashboard/data-tugas/deleteAll', 'AdminController@delete_all');
Route::get('/dashboard/nilai', 'AdminController@nilai_user');

// absensi
Route::get('/dashboard/absensi', 'AdminController@absensi');

