<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('Login');
    }
    public function authenticate(Request $request)
    {
        // dd('Login');
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // $admins =Anggota::all();
        // dd($credentials); 
        // dd([[$admins[0]->username, $admins[0]->password],$credentials, Auth::guard('anggotas')->attempt($credentials)]);
        if (Auth::guard('anggotas')->attempt($credentials)) {
            // dd();
            $request->session()->regenerate();
            return redirect()->intended('/test');
        }
        
        return back()->with('loginError', 'username atau password salah!');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
