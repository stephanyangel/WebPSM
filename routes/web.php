<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); 
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/services', function () {
    return view('services'); 
});

Route::get('/gallery', function () {
    return view('gallery'); 
});

Route::get('/clients', function () {
    return view('clients'); 
});

Route::get('/contact', function () {
    return view('contact'); 
});

use App\Http\Controllers\ContactController;

// Ini ngasih tau Laravel: "Kalau ada form ngirim data ke /kirim-pesan, tolong kasih ke ContactController buat diurusin"
Route::post('/kirim-pesan', [ContactController::class, 'kirimSurat']);