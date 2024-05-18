<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/waf/download/{waf_version}', function () {

})->name('waf.download');