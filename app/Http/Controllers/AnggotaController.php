<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\TTD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user());
        if(Auth::user()->Jabatan == "admin"){
            return view('Anggota', ['Anggotas' => Anggota::where('Jabatan', '!=','BukanAnggota')->get()]);
        }else{
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('createBiodata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rule = [
            'Nama' => 'required',
            'Jabatan' => 'required',
        ];
        
        $Data = $request->validate($rule);
        // dd([$id,$request->Judul]);
        Anggota::create($Data);
        $Anggota = Anggota::where('Nama', $request->Nama)->first();
        if($request->file('Gambar')){
            // dd(TTD::where('id', $Anggota->TTD->id));
            $file['Gambar'] = $request->file('Gambar')->store('TTD');
            $file['anggota_id'] = $Anggota->id;
            TTD::create($file);
            // TTD::where('id', $Anggota->TTD->id)->update(['Gambar' => $request->file('Gambar')->store('TTD')]);
        }
        return redirect('/Biodata')->with('success', 'Barita berhasil diubah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $Anggota = Anggota::find($id);
        // dd($Anggota);
        return view('Biodata', ['Anggota' => $Anggota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
        // dd(TTD::all());
        $rule = [
            'Nama' => 'required',
            'Jabatan' => 'required'
        ];
        $Anggota = Anggota::where('id', $id)->first();
        if($request->file('Gambar')){
            // dd(TTD::where('id', $Anggota->TTD->id));
            TTD::where('id', $Anggota->TTD->id)->update(['Gambar' => $request->file('Gambar')->store('TTD')]);
        }
        $Data = $request->validate($rule);
        // dd([$id,$request->Judul]);
        Anggota::where('id',$id)->update($Data);
        return redirect('/Biodata')->with('success', 'Barita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        // dd($berita);
        Anggota::destroy($id);
        return redirect('/Anggota')->with('success', 'Barita sudah dihapus');
    }
}
