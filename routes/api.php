<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CodeScannerController;
use App\Http\Controllers\NativeAPI\WafController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::get('/scan', [CodeScannerController::class, 'start_scan'])->middleware('auth:sanctum');

Route::middleware("auth:sanctum")->group(function () {
    Route::post('/verify', [AgentController::class, 'checkToken'])->name('agent.check-token');
    Route::get('/config', [AgentController::class, 'siteConfig'])->name('agent.site-config');
    Route::post('/log', [AgentController::class, 'log'])->name('agent.log');
});
