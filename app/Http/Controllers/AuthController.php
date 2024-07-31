<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $param = [
            'active' => 'login',
        ];

        return view('auth.login', $param);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
        //return redirect("login")->withErrors('Oppes! You have entered invalid credentials');
        return Redirect::back()->withErrors(
            [
                'email' => 'Maaf, email yang anda masukkan salah',
                'password' => 'Maaf, password yang anda masukkan salah'
            ]
        );
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
