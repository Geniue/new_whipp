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

Route::get('/case-studies', function () {
    return view('app.work.case_studies');
})->name('case-studies');


Route::get('/logo-designs', function () {
    return view('app.work.logo_designs');
})->name('logo-designs');

Route::get('/video', function () {
    return view('app.work.video');
})->name('video');


Route::get('/web-designs', function () {
    return view('app.work.web_designs');
})->name('web-designs');

Route::get('/about-us', function () {
    return view('app.about_us');
})->name('about-us');


Route::get('/blog', function () {
    return view('app.blog');
})->name('blog');





Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('app.service_index');
    })->name('services');

    Route::get('/service-page', function () {
        return view('app.service_page');
    })->name('service01');
});
