<?php

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
    return view('tanya');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
