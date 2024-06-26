<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard1', function () {
    return view('dashboard1');
});

Route::get('/dashboard2', function () {
    return view('dashboard2');
});

Route::get('/dashboard3', function () {
    return view('dashboard3');
});

Route::get('/dashboard4', function () {
    return view('dashboard4');
});

Route::get('/tentang-pustekinfo', function () {
    return view('tentang-pustekinfo');
});

Route::get('/visi&misi', function () {
    return view('visi&misi');
});

Route::get('/sejarah-pustekinfo', function () {
    return view('sejarah-pustekinfo');
});

Route::get('/tugas&fungsi-pustekinfo', function () {
    return view('tugas&fungsi-pustekinfo');
});

Route::match(['get','post'],'/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');
