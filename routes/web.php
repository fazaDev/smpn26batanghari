<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth', 'checkRole:admin')->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('dashboard', 'DashboardController')->name('admin.dashboard');
    Route::resource('kelas', 'KelasController');
    Route::resource('siswa', 'SiswaController');
    Route::resource('guru', 'GuruController');
    Route::resource('orang-tua', 'OrangTuaController');
});

Route::middleware('auth', 'checkRole:siswa')->namespace('Siswa')->prefix('siswa')->group(function () {
    Route::resource('materi', 'MateriController');
    Route::resource('latihan', 'LatihanController');
    Route::resource('penilaian', 'PenilaianController');
});


Route::middleware('auth', 'checkRole:guru')->namespace('Guru')->prefix('guru')->group(function () {
    Route::resource('guru-materi', 'MateriController');
    Route::resource('guru-latihan', 'LatihanController');
    Route::resource('guru-penilaian', 'PenilaianController');
});

Route::middleware('auth', 'checkRole:orangtua')->namespace('Ortu')->prefix('ortu')->group(function () {
    Route::get('lihat-nilai', 'PenilaianController@index')->name('lihat-nilai');
});
