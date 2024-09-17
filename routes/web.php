<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main');
})->name('mainpage');

Route::get('/nmhs', function () {
    return view('nmhs');
})->name('newsma');

Route::get('/nalm', function () {
    return view('nalm');
})->name('newsal');

Route::get('/uhb', function () {
    return view('uhb');
})->name('uchabe');

Route::get('/ilo', function () {
    return view('ilo');
})->name('inlo');

Route::get('/download', function () {
    return view('download');
})->name('downld');