<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/export/', [\App\Http\Controllers\UserController::class, 'export']);
Route::get('/users/export_header/', [\App\Http\Controllers\UserController::class, 'exportHeader']);

Route::get('users/imports/excel/create/', [\App\Http\Controllers\UserController::class, 'createExcel'])->name('users.imports.excel.create');
Route::post('/users/imports/excel', [\App\Http\Controllers\UserController::class, 'storeExcel'])->name('users.imports.excel.store');
Route::get('/users/excel', [\App\Http\Controllers\UserController::class, 'index'])->name('users.excel.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
