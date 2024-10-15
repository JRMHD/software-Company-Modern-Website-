<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;



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
    return view('welcome');
});


// My routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio.details');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/service-details', function () {
    return view('service-details');
})->name('service.details');
// My routes End

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/subscribe', [NewsletterController::class, 'subscribe']);

Route::post('/subscribe', [NewsletterController::class, 'store'])->name('subscribe');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::post('/subscribe', [NewsletterController::class, 'subscribe']);
