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

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view(view: 'terms');
});

Route::get('/contact', function () {
    return view(view: 'contact');
});

Route::get('/faq', function () {
    return view(view: 'faq');
});

Route::get('/insurance', function () {
    return view(view: 'insurance');
});

Route::get('/lending', function () {
    return view(view: 'lending');
});

Route::get('/deposits', function () {
    return view(view: 'deposits');
});

Route::get('/accounts', function () {
    return view(view: 'accounts');
});



