<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/upload', [ImageUploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [ImageUploadController::class, 'uploadImage'])->name('upload.image');

Route::get('/user',function(){
    dd(User::all());
});