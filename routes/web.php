<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TechnicianController;
use App\Models\Biodatas;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/tanya', [QuestionController::class, 'index'])->name('questions');

Route::get('/tanya/{id}', [QuestionController::class, 'detailQuestion'])->name('detailqs');

Route::get('/detail/{id}', [BlogsController::class, 'detail'])->name('detail-post');

Route::get('/posts', [BlogsController::class, 'index']);


Route::get('/cari-teknisi', [TechnicianController::class, 'index'])->name('cari-teknisi');

Route::get('/form-question', [QuestionController::class, 'inputUserQuestion'])->name('form-tanya')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
