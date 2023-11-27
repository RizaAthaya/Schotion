<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = auth()->user();
                Session::put('user', $user);
                return redirect()->intended('/');
            } else {
                return back()->withErrors(['email' => 'Authentication failed.'])->with('error_message', "Email or password is incorrect");
            }
        } catch (\Exception $e) {
            return back()->withErrors(['email' => $e->getMessage()])->with('error_message', $e->getMessage());
        }
    }



    public function logout()
    {
        try {
            Session::flush();
            Auth::logout();
            return redirect('/auth/login');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:pengguna',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required|string|min:8',
            ]);

            $idPeranMahasiswa = Peran::where('nama', 'mahasiswa')->value('id_peran');

            $user = Pengguna::create([
                'nama_lengkap' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'id_peran' => $idPeranMahasiswa,
            ]);

            return redirect()->route('auth.login')->with('success', 'Registrasi berhasil! Silakan login.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
