<?php

use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::middleware('auth')->group(function () {

	Route::get('/subscribe', [SubscriptionController::class, 'index'])->name('subscribe');
	Route::get('/redirect-to-sub/{membership}', [SubscriptionController::class, 'redirect'])->name('redirect');
	Route::get('/waf/download/{waf_version}', function () {

	})->name('waf.download');
});

Route::get('/login', function () {
	return redirect(route('filament.app.auth.login'));
})->name('login');