<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Surat;
use App\Models\TTD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class Test extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function test()
    {
        // $users =Anggota::all()->first();
        // dd(Auth::user());
        return view('test');
    }

}
