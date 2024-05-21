<?php

use App\Models\Stellen;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\StellenController;
use App\Http\Controllers\CategoriesController;

Route::get('/stellenliste', function () {
    $stellen = Stellen::with(['category', 'company'])->get();
    return view('Stellen/liste', ['stellen' => $stellen]);
});

Route::get('/stellendetail', function () {
    $stellen = Stellen::with(['category', 'company'])->get();
    return view('Stellen/detail', ['stellen' => $stellen]);
});

Route::resource('categories', CategoriesController::class);
Route::resource('companies', CompaniesController::class);
Route::resource('users', UsersController::class);
Route::resource('stellen', StellenController::class);