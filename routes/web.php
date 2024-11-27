<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ObjectionController;
use App\Http\Controllers\PublicInformationRequestController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PublicInformationController;

Route::get('/', function () {
    return view('public.index');
})->name('public.index');


Route::get('login', [UserController::class, 'showLoginForm'])->name('login'); 
Route::post('login', [UserController::class, 'login']); 
Route::post('logout', [UserController::class, 'logout'])->name('logout'); 

// Route::get('dashboard', [UserController::class, 'dashboard']);
Route::resource('objections', ObjectionController::class);
Route::resource('public_information_requests', PublicInformationRequestController::class);

Route::get('request/form', [PublicInformationRequestController::class, 'publicForm'])->name('request.form');
Route::post('request/store', [PublicInformationRequestController::class, 'store'])->name('request.store');

Route::get('objection/form', [ObjectionController::class, 'publicForm'])->name('objection.form');
Route::post('objection/store', [ObjectionController::class, 'store'])->name('objection.store');

Route::middleware('auth')->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/admin/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/admin/gallery/{id}', [GalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/admin/gallery/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

    Route::get('report', [ReportController::class, 'index'])->name('report.index');
    Route::get('report/data', [ReportController::class, 'show'])->name('report.show');
    Route::post('report/update-status', [ReportController::class, 'updateStatus'])->name('report.updateStatus');
    Route::delete('report/data/{id}', [ReportController::class, 'destroy'])->name('report.destroy');
    Route::post('report/update', [ReportController::class, 'update'])->name('report.update');
    Route::post('report/store', [ReportController::class, 'store'])->name('report.store');

    Route::get('document', [PublicInformationController::class, 'index'])->name('document.index');
    Route::get('document/data', [PublicInformationController::class, 'show'])->name('document.show');
    Route::post('document/update-status', [PublicInformationController::class, 'updateStatus'])->name('document.updateStatus');
    Route::delete('document/data/{id}', [PublicInformationController::class, 'destroy'])->name('document.destroy');
    Route::post('document/update', [PublicInformationController::class, 'update'])->name('document.update');
    Route::post('document/store', [PublicInformationController::class, 'store'])->name('document.store');

    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('gallery/data', [GalleryController::class, 'show'])->name('gallery.show');
    Route::delete('gallery/data/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::post('gallery/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');

    Route::get('request', [PublicInformationRequestController::class, 'index'])->name('request.index');
    Route::get('request/data', [PublicInformationRequestController::class, 'show'])->name('request.data');
    Route::post('request/update-status', [PublicInformationRequestController::class, 'updateStatus'])->name('request.updateStatus');
    Route::delete('request/data/{id}', [PublicInformationRequestController::class, 'destroy'])->name('request.destroy');
    
    Route::get('objection', [ObjectionController::class, 'index'])->name('objection.index');
    Route::get('objection/data', [ObjectionController::class, 'show'])->name('objection.data');
    Route::post('objection/update-status', [ObjectionController::class, 'updateStatus'])->name('objection.updateStatus');
    Route::delete('objection/data/{id}', [ObjectionController::class, 'destroy'])->name('objection.destroy');

});



