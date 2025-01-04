<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/request-demo', function () {
    return view('request-demo');
});

Route::get('/upload', [ImageUploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [ImageUploadController::class, 'uploadImage'])->name('upload.image');

Route::get('/admin/login',[LoginController::class, 'showLoginForm'])->name('admin.login');