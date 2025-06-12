<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::resource('books', BookController::class);


// Routing untuk halaman contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contact/list', [ContactController::class, 'index'])->name('contact.index');
