<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            //send email

            return redirect()->intended('mahasiswa');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request) {
        $newUser = DB::table('users')->insert([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('auth.login');
    }

    public function register_form() {
        return view('register');
    }

    public function login_form() {
        return view('login');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
