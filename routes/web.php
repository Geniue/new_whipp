<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app.homepage');
});

Route::prefix('contact')->group(function () {
    Route::get('/', function () {
        return view('app.contact');
    })->name('contact');
});


Route::get('/faqs', function () {
    return view('app.faqs');
})->name('faqs');

Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('app.service_index');
    })->name('services');

    Route::get('/service-page', function () {
        return view('app.service_page');
    })->name('service01');
});
