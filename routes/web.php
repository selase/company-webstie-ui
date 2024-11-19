<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $slides = [
        [
            'image' => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
            'imgAlt' => 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            'title' => 'Front end developers',
            'description' => 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.',
            'hire'=>'Hire Top Talent',
        ],
        [
            'image' => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',
            'imgAlt' => 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
            'title' => 'Back end developers',
            'description' => 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens',
            'hire'=>'Hire Top Talent',
        ],
        [
            'image' => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
            'imgAlt' => 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            'title' => 'Full stack developers',
            'description' => 'Where "burnout" is just a fancy term for "Tuesday".',
            'hire'=>'Hire Top Talent',
        ],
    ];
       

    return view('pages.landing-page',["slides"=> $slides]);
})->name('home');
Route::get('/community-page', function () {
    return view('pages.community',);
})->name('community-page');
Route::get('/startup-page', function () {
    $slides = [
        [
            'image' => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
            'imgAlt' => 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            'title' => 'Front end developers',
            'description' => 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.',
            'hire' => 'Hire Top Talent',
        ],
        [
            'image' => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',
            'imgAlt' => 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
            'title' => 'Back end developers',
            'description' => 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens',
            'hire' => 'Hire Top Talent',
        ],
        [
            'image' => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
            'imgAlt' => 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            'title' => 'Full stack developers',
            'description' => 'Where "burnout" is just a fancy term for "Tuesday".',
            'hire' => 'Hire Top Talent',
        ],
    ];
    return view('pages.startup',['slides'=>$slides]);
})->name('startup-page');
Route::get('/product-page', function () {
    return view('pages.product');
})->name('product-page');