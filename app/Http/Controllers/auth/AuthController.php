<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('panel')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withError('Oppes! You have entered invalid credentials');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:3|confirmed',
            'accept_terms' => 'required|in:1'
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        if( Auth::attempt($credentials) ) {
            $request->session()->regenerate();
            return redirect()->route('panel')
                ->withSuccess('You have successfully registered & logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
            'password' => 'Bad password.',
            'accept_terms' => 'You should check this.'
        ])->onlyInput('email', 'password', 'accept_terms');
    }

    public function logout(Request $request): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return Redirect('login')->withSuccess('You have logged out successfully!');
    }
}
