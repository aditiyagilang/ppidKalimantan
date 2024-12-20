<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ObjectionController;
use App\Http\Controllers\PublicInformationRequestController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PublicInformationController;
use App\Http\Controllers\NewsController;
use App\Models\Objection;
use Illuminate\Support\Facades\Http;
use App\Models\PublicInformation;
use App\Models\PublicInformationRequest;

Route::get('/', function () {
    $totalPublicInformation = PublicInformation::count();
    $totalRequest = PublicInformationRequest::count();
    $totalObjection = Objection::count();
    $totalRequestDone = PublicInformationRequest::where('status', 'Approved')->count();
    return view('public.index', compact('totalPublicInformation', 'totalRequest', 'totalObjection', 'totalRequestDone'));
})->name('public.index');

Route::get('/news', function () {
    return view('public.news.index');
})->name('public.news.index');

Route::get('/contact', function () {
    return view('public.news.contact');
})->name('public.news.contact');

Route::get('/profile-ppid', function () {
    return view('public.profil.profilePpid');
})->name('profile-ppid');

Route::get('/visi-misi', function () {
    return view('public.profil.visiMisi');
})->name('profile-visimisi-ppid');

Route::get('/struktur-organisasi', function () {
    return view('public.profil.strukturOrganisasi');
})->name('profile-struktur-ppid');

Route::get('/dasar-hukum', function () {
    return view('public.profil.dasarHukum');
})->name('profile-dasar-hukum');

Route::get('/tata-cara-permohonan-informasi', function () {
    return view('public.standarPelayanan.informasi');
})->name('standar-informasi');

Route::get('/tata-cara-keberatan-informasi', function () {
    return view('public.standarPelayanan.keberatan');
})->name('standar-keberatan');

Route::get('/tata-cara-penyelesaian-sengketa', function () {
    return view('public.standarPelayanan.sengketa');
})->name('standar-sengketa');

Route::get('/maklumat', function () {
    return view('public.standarPelayanan.maklumat');
})->name('standar-maklumat');

Route::get('/sop', function () {
    return view('public.standarPelayanan.sop');
})->name('standar-sop');

Route::get('/dip-provinsi', function () {
    return view('public.standarPelayanan.dipProv');
})->name('standar-dip');

Route::get('/informasi-public-berkala', function () {
    return view('public.informasiPublic.berkala');
})->name('info-berkala');

Route::get('/informasi-public-dikecualikan', function () {
    return view('public.informasiPublic.dikecualikan');
})->name('info-dikecualikan');

Route::get('/informasi-public-setiap-saat', function () {
    return view('public.informasiPublic.setiapSaat');
})->name('info-setiap-saat');

Route::get('/informasi-public-serta-merta', function () {
    return view('public.informasiPublic.sertaMerta');
})->name('info-serta-merta');

Route::get('fetch-news', [NewsController::class, 'fetchNews'])->name('fetch-news');

Route::get('login', [UserController::class, 'showLoginForm'])->name('login'); 
Route::post('login', [UserController::class, 'login']); 
Route::post('logout', [UserController::class, 'logout'])->name('logout'); 

// Route::get('dashboard', [UserController::class, 'dashboard']);
Route::resource('objections', ObjectionController::class);
Route::resource('public_information_requests', PublicInformationRequestController::class);

Route::get('request/form', [PublicInformationRequestController::class, 'publicForm'])->name('request.form');
Route::post('request/store', [PublicInformationRequestController::class, 'store'])->name('request.store');

Route::get('request/check', [PublicInformationRequestController::class, 'check'])->name('request.check');
Route::get('request/status', [PublicInformationRequestController::class, 'status'])->name('request.status');

Route::get('objection/form', [ObjectionController::class, 'publicForm'])->name('objection.form');
Route::get('objection/form', [ObjectionController::class, 'publicForm'])->name('objection.form');
Route::post('objection/store', [ObjectionController::class, 'store'])->name('objection.store');

Route::get('objection/check', [ObjectionController::class, 'check'])->name('objection.check');
Route::get('objection/status', [ObjectionController::class, 'status'])->name('objection.status');

Route::get('public-information', [PublicInformationController::class, 'public'])->name('public.info');
Route::get('public-information/data', [PublicInformationController::class, 'data'])->name('public.data');

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



Route::get('/gallery/photos', [GalleryController::class, 'photosIndex'])->name('gallery.photos');
Route::get('/gallery/video', [GalleryController::class, 'videosIndex'])->name('gallery.video');
Route::get('/gallery/podcast', [GalleryController::class, 'podcastIndex'])->name('gallery.podcast');
Route::get('/gallery/comic', [GalleryController::class, 'comicIndex'])->name('gallery.comic');

Route::get('/report/finance', [ReportController::class, 'keuanganIndex'])->name('report.finance');
Route::get('/report/performance', [ReportController::class, 'kinerjaIndex'])->name('report.administration');
Route::get('/report/administration', [ReportController::class, 'penyelenggaraanIndex'])->name('report.performance');
Route::get('/report/ppid', [ReportController::class, 'ppidIndex'])->name('report.ppid');




