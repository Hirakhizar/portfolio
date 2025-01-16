<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('layouts.about'); // Replace 'resume' with the actual view name
})->name('about');

Route::get('/resume', function () {
    return view('layouts.resume'); // Replace 'resume' with the actual view name
})->name('resume');

Route::get('/services', function () {
    return view('layouts.services'); // Replace 'services' with the actual view name
})->name('services');

Route::get('/portfolio', function () {
    return view('layouts.portfolio'); // Replace 'portfolio' with the actual view name
})->name('portfolio');

Route::get('/contact', function () {
    return view('layouts.contact'); // Replace 'contact' with the actual view name
})->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contactMe');
