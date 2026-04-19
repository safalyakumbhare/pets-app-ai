<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => [
                    'required',

                ],

            ]
        );

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->role_id === 1) {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }

            if (Auth::user()->role_id === 2) {
                $request->session()->regenerate();
                // return redirect()->route('user.agents_dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The credentials do not match with records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('loginpage');
    }
}
