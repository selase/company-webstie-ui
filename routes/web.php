<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing-page');
})->name('home');
Route::get('/community-page', function () {
    return view('pages.community');
})->name('community-page');
Route::get('/product-page', function () {
    return view('pages.product');
})->name('product-page');