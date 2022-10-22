<?php

namespace App\Http\Controllers;

use App\Models\Biodatas;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function index(){
        $users = Biodatas::all()->where('role', '=', 'technician');
        return view('cari', [
            'technician' => $users
        ]);
    }
}
