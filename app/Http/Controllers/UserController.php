<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Menampilkan halaman login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Ganti dengan path view login Anda
    }

    /**
     * Proses login.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial dan login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman dashboard atau halaman yang ditentukan
            return redirect()->intended('dashboard'); // Ganti dengan route tujuan setelah login
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    /**
     * Logout pengguna.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect()->route('login'); // Redirect ke halaman login
    }

    /**
     * Menampilkan halaman dashboard pengguna setelah login.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('dashboard'); // Ganti dengan path halaman dashboard Anda
    }

    /**
     * Middleware untuk memastikan pengguna terautentikasi.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['showLoginForm', 'login']);
    }
}
