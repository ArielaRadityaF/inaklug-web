<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/layanankami', function () {
    return view('layanankami');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/hubungikami', function () {
    return view('hubungikami');
});

use App\Http\Controllers\HubungiKamiController;

Route::post('/hubungikami', [HubungiKamiController::class, 'kirimPesan'])->name('hubungi.kami.kirim');
