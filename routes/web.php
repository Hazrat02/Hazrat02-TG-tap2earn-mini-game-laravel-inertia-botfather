<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('route:clear');

    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'done';
});

Route::get('/', function () {
    return Inertia::render('home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        // 'privacyUrl' => route('privacy'), // Pass the URL of the privacy page
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::prefix('mini')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Mini/home', [
            // Your data here
        ]);
    })->name('mini');
    Route::get('/raffer', function () {
        return Inertia::render('Mini/raffer', [
            // Your data here
        ]);
    })->name('raffer');
    Route::get('/project', function () {
        return Inertia::render('Mini/project', [
            // Your data here
        ]);
    })->name('project');
    Route::get('/task', function () {
        return Inertia::render('Mini/task', [
            // Your data here
        ]);
    })->name('task');
    Route::get('/wallet', function () {
        return Inertia::render('Mini/wallet', [
            // Your data here
        ]);
    })->name('wallet');
});

Route::get('/privacy', function () {
    return Inertia::render('PrivacyPolicy');
})->name('privacy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // sleep('5');
    Route::get('/dashboard', function () {

     return Inertia::render('Dashboard');
        
        
    })->name('dashboard');
});
