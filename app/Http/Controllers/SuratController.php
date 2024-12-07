<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Anggota;
use App\Models\ttdtosurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Signed(int $id){
        $ttd = ttdtosurat::where('id', $id)->first();
        // dd($ttd);
        return view('Signed', ['Sign'=> $ttd]);        
    }
    public function Sign(int $id){
        $ttd = ttdtosurat::where('id',$id)->update(['Sign' => 'Signed']);
        return back();
    }
    public function index()
    {
        // $sign = Anggota::all();
        // dd($sign[0]->ttdtosurat);
        return view('Surat', ['Surat' => Surat::all(), 'SignSurat'=> Anggota::all()->where('id', Auth::user()->id)->first()->ttdtosurat]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('createSurat',['Anggotas' => Anggota::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        DB::table('surats')->insert([
            'Isi' => $request->textisi,
            'Subjek' => $request->subjek,
            'NomorSurat' => $request->nomorSurat
        ]);
        $index = 0;
        foreach ($request->Nama as $n) {
            // print($n);
            $test = Anggota::all()->where('Nama', $n);
            // print(sizeof($test));
            if (sizeof($test) == 0) {
                DB::table('anggotas')->insert([
                    'Nama' => $n,
                    'Username' => "lo",
                    'password' => Hash::make('12345678'),
                    'Jabatan' => "BukanAnggota",
                ]);
            }
            $suratttd = Anggota::all()->where('Nama', $n)->first();
            $surat = Surat::all()->where('NomorSurat', $request->nomorSurat)->first();
            print($suratttd);
            DB::table('ttdtosurats')->insert([
                'anggota_id' => $suratttd->id,
                'sUrat_id' => $surat->id,
                'Sebagai' => $request->Sebagai[$index],
                'Tempat' => $request->Tempat[$index],
                'Tanggal' => $request->Date[$index],
                'Sign' => 'Unsigned'
            ]);
            $index = $index + 1;
        }
        return redirect("/Surat");
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        // dd($berita);
        Surat::destroy($id);
        return redirect('/Surat')->with('success', 'Barita sudah dihapus');
    }
}
