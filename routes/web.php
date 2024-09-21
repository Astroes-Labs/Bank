<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/first-steps', function () {
    return view('first-steps');
});

Route::get('/personal', function () {
    return view('personal');
});

Route::get('/wealth-management', function () {
    return view('wealth-management');
});


Route::get('/commercial', function () {
    return view('commercial');
});

Route::get('/security', function () {
    return view('security');
});

Route::get('/fraud-protection', function () {
    return view('fraud-protection');
});



