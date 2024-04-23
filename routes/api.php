<?php

use App\Http\Controllers\CodeScannerController;
use App\Http\Controllers\NativeAPI\WafController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => '/waf', 'middleware' => 'auth:sanctum'], function () {
	Route::post('/log', [WafController::class, 'log'])->name('waf.log');
});

Route::get('/scan', [CodeScannerController::class, 'start_scan'])->middleware('auth:sanctum');

Route::get('/test', function () {
	return [
		'msg' => 'Hello World'
	];
});