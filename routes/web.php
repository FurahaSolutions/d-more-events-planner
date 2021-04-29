<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\SocialAuthenticationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
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

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('events/create', [EventController::class, 'create'])->name('events.create');

Route::post('events', [EventController::class, 'store'])->name('events.store');

Route::get('events', [EventController::class, 'index'])->name('events.index');

Route::get('events/{event}', [EventController::class, 'show'])->name('events.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/auth/redirect/{provider}', [SocialAuthenticationController::class, 'redirect']);

Route::get('/auth/callback/{provider}', [SocialAuthenticationController::class, 'callback']);

require __DIR__ . '/auth.php';
