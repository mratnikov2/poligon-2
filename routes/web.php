<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome');
//})->name('home');
//
//Route::get('dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//require __DIR__.'/settings.php';
//require __DIR__.'/auth.php';

Route::get('/', function () {
        return view('welcome');
});

//Основные

Route::get('/talant', function () {
    return view('partials.elements.talant');
})->name('talant');

Route::get('/brands', function () {
    return view('partials.elements.brands');
})->name('brands');

Route::get('/enterprise', function () {
    return view('partials.elements.enterprise');
})->name('enterprise');

//Второсепенные

Route::get('/about', function () {
    return view('partials.elements.about');
})->name('about');

Route::get('/careers', function () {
    return view('partials.elements.careers');
})->name('careers');

Route::get('/contact', function () {
    return view('partials.elements.contact');
})->name('contact');




