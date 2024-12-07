<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\ttdtosurat;
use Illuminate\Http\Request;

class PreViewController extends Controller
{
    //
    public function view(int $id){
        $surat = Surat::all()->where('id', $id)->first();
        // dd($surat);
        return view('Preview', ['Surat' => $surat]);
    }
}
