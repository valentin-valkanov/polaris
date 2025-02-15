<?php

use App\Http\Controllers\PositionController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/positions', [PositionController::class, 'showAllPositions'])->name('positions');

Route::get('/positions/add', [PositionController::class, 'addPosition'])->name('position.add');

Route::post('/positions/store', [PositionController::class, 'storePosition'])->name('position.store');

Route::get('/stats', function (){
    return view('stats');
});

Route::get('/sizing', function (){
    return view('position-sizing');
});
