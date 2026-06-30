<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function loginGoogle()
    {
        // Find the seeded mock user
        $user = User::where('email', 'henriyanto.situmorang@kreditplus.com')->first();
        
        if ($user) {
            Auth::login($user);
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error', 'Mock user not found. Please run migrations and seeders.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
