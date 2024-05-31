<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KulinerController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/components/event-card', [EventController::class, 'event_card'])->name('event-card');
Route::resource('/events', EventController::class);

Route::resource('/destinasis', DestinasiController::class);
Route::get('/destinasi', [DestinasiController::class, 'destinasi'])->name('destinasi');
Route::get('/components/destinasi-card', [DestinasiController::class, 'destinasi_card'])->name('destinasi-card');

Route::resource('kuliners', KulinerController::class);
Route::get('/kuliner', [KulinerController::class, 'kuliner'])->name('kuliner');
Route::get('/components/kuliner-card', [KulinerController::class, 'kuliner_card'])->name('kuliner-card');

Route::get('/show-destinasi', function () {
    return view('user.show-destinasi');
});
