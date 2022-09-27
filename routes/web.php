<?php

use App\Models\Questions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = DB::table('blogs')->orderByDesc('created_at')->limit(3)->get();
    return view('home', [
        'title' => 'Teknisiku - Solusi Kerusakan Elektronik',
        'blogs' => $blogs,
    ]);
});

Route::get('/tanya', function () {
    $qestions = Questions::paginate(2);
    // dd($qestions);
    return view('tanya', [
        'questions' => $qestions,
    ]);
})->name('questions');

Route::get('/tanya/{id}', function ($id) {
    $question = Questions::find($id);
    return view('detailqs', [
        'question' => $question
    ]);
})->name('detailqs');

Route::get('/detail', function () {
    return view('post');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/cari-teknisi', function () {
    return view('cari');
})->name('cari-teknisi');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
