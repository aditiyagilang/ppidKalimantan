<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [UserController::class, 'showLoginForm'])->name('login'); 
Route::post('login', [UserController::class, 'login']); 
Route::post('logout', [UserController::class, 'logout'])->name('logout'); 

Route::get('dashboard', [UserController::class, 'dashboard'])->middleware('auth');
Route::resource('objections', ObjectionController::class);
Route::resource('public_information_requests', PublicInformationRequestController::class);
Route::resource('reports', ReportController::class);
Route::resource('galleries', GalleryController::class);
