<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function showLogin(){
        return view('login');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|max:100|email:dns|unique:users',
            'password' => 'required|min:5|max:100',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        session()->flash('success', 'Task was successful!');

        return redirect('/');
    }

    public function authentication(Request $request): RedirectResponse{
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('article.index')->with('success_login', 'Login Successful!');
        }

        return back()->with('loginError', 'login Failed!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
