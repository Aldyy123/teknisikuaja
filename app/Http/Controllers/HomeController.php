<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = DB::table('blogs')->orderByDesc('created_at')->limit(3)->get();
        return view('home', [
            'title' => 'Teknisiku - Solusi Kerusakan Elektronik',
            'blogs' => $blogs,
        ]);
    }
}
