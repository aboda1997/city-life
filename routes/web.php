<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ConsultationController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    //    Auth::routes();
    //Homepage
    Route::get('/', [HomepageController::class, 'index'])->name('front.home');

    //about
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // services
    Route::get('/services', [ServiceController::class, 'index'])->name('front_services.index');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('front_services.show');

    // Contact
    Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'create'])->name('contact.save');

    // Consultation
    Route::get('/consultation-request', [ConsultationController::class, 'index'])->name('consultation');
    Route::post('/consultation-request', [ConsultationController::class, 'store'])->name('consultation.save');

    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('home');
});

Auth::routes();