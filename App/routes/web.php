<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\user\DestinasiUserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\User\KulinerUserController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/components/event-card', [EventController::class, 'event_card'])->name('event-card');

Route::get('/destinasi', [DestinasiUserController::class, 'destinasi'])->name('destinasi');
Route::get('/components/destinasi-card', [DestinasiUserController::class, 'destinasi_card'])->name('destinasi-card');
Route::get('/show-destinasi/{id}', [DestinasiUserController::class, 'show'])->name('show-destinasi');

Route::get('/kuliner', [KulinerController::class, 'kuliner'])->name('kuliner');
Route::get('/components/kuliner-card', [KulinerController::class, 'kuliner_card'])->name('kuliner-card');
Route::get('/show-kuliner/{id}', [KulinerUserController::class, 'show'])->name('show-kuliner');

Route::middleware(['guest'])->group(function () {

    // Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register');
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);
    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    // Rute-rute yang memerlukan autentikasi

    Route::resource('/events', EventController::class);
    Route::resource('/destinasis', DestinasiController::class);
    Route::resource('/kuliners', KulinerController::class);

    Route::get('/admin-home', [AdminController::class, 'home'])->name('home');

    // Rute untuk logout
    Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');
});

