<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    //
    public function index(){
        return view('Biodata', ['Anggota' => Auth::user()]);
    }
}
