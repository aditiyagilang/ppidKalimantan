<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ObjectionController;
use App\Http\Controllers\PublicInformationRequestController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('public.index');
});


Route::get('login', [UserController::class, 'showLoginForm'])->name('login'); 
Route::post('login', [UserController::class, 'login']); 
Route::post('logout', [UserController::class, 'logout'])->name('logout'); 

// Route::get('dashboard', [UserController::class, 'dashboard'])->middleware('auth');
Route::resource('objections', ObjectionController::class);
Route::resource('public_information_requests', PublicInformationRequestController::class);
Route::resource('reports', ReportController::class);

Route::middleware('auth')->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/admin/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/admin/gallery/{id}', [GalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/admin/gallery/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');
    
    Route::get('request', [PublicInformationRequestController::class, 'index'])->name('request.index');
    Route::get('request/data', [PublicInformationRequestController::class, 'show'])->name('request.data');
    Route::post('request/update-status', [PublicInformationRequestController::class, 'updateStatus'])->name('request.updateStatus');
    Route::delete('request/data/{id}', [PublicInformationRequestController::class, 'destroy'])->name('request.destroy');
    
    Route::get('objection', [ObjectionController::class, 'index'])->name('objection.index');
    Route::get('objection/data', [ObjectionController::class, 'show'])->name('objection.data');
    Route::post('objection/update-status', [ObjectionController::class, 'updateStatus'])->name('objection.updateStatus');
    Route::delete('objection/data/{id}', [ObjectionController::class, 'destroy'])->name('objection.destroy');
});



