<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\SocialAuthenticationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


Route::get('/contact', function () {
    return view('pages.contact')->with('links', [
        'name' => 'About Us'
    ]);
})->name('contact');

Route::get('events/{event}', [EventController::class, 'show'])->name('event');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/auth/redirect/{provider}', [SocialAuthenticationController::class, 'redirect']);

Route::get('/auth/callback/{provider}', [SocialAuthenticationController::class, 'callback']);

require __DIR__ . '/auth.php';
