<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerUser extends Controller
{
    public function create()
    {
        return view('components.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'password' => ['required', 'confirmed'],
        ]);

        User::create([
            'name' => request('name'),
            'password' => Hash::make(request('password')),
        ]);

        Auth::attempt(['name' => request('name'), 'password' => request('password')]);

        return redirect()->route('home');
    }
    public function login()
    {
        return view('components.user.login');
    }
    public function loginAuth(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
