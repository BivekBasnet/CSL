<?php

/*
|--------------------------------------------------------------------------
| Web Routes for Cleaning Service Website
|--------------------------------------------------------------------------
|
| This file contains the route definitions for the cleaning service website.
| All routes return Blade views that correspond to the converted React pages.
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;

// Home page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Services page
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// About page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Team page
Route::get('/team', function () {
    return view('pages.team');
})->name('team');

// Contact page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Career page
Route::get('/career', function () {
    return view('pages.career');
})->name('career');

// Career application submission
Route::post('/career/apply', [CareerController::class, 'apply'])->name('career.apply');

// Testimonials page
Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

// 404 page (fallback)
Route::fallback(function () {
    return view('pages.404');
});

/*
|--------------------------------------------------------------------------
| Additional Routes (Optional)
|--------------------------------------------------------------------------
|
| These routes can be added for additional functionality:
|
*/

// API Routes for AJAX requests
Route::prefix('api')->group(function () {
    Route::post('/quote', [ContactController::class, 'getQuote'])->name('api.quote');
    Route::get('/services/{slug}', function ($slug) {
        // Return service details as JSON
        return response()->json(['service' => $slug]);
    })->name('api.service');
});

// Admin routes (if needed)
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts');
    Route::get('/applications', [CareerController::class, 'index'])->name('admin.applications');
});

// SEO-friendly URLs
Route::get('/cleaning-services', function () {
    return redirect()->route('services');
});

Route::get('/about-us', function () {
    return redirect()->route('about');
});

Route::get('/our-team', function () {
    return redirect()->route('team');
});

Route::get('/contact-us', function () {
    return redirect()->route('contact');
});

Route::get('/jobs', function () {
    return redirect()->route('career');
});

Route::get('/reviews', function () {
    return redirect()->route('testimonials');
});
