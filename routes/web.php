<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/positions', function (){
    return view('positions');
});

Route::get('/stats', function (){
    return view('stats');
});
