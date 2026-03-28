<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        Auth::logout();
        
        return view('login');
    }

    public function loginUser(Request $request) {
        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('user.index');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('user.index');
    }

    public function register() {
        return view('register');
    }

    public function registerUser(Request $request) {
        $data = $request->only(['name', 'email', 'password']);

        $data['password'] = Hash::make($data['password']);

        $user = User::createUser($data);

        return redirect()->route('login');
    }
}
