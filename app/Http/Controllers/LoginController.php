<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Esse campo de email é obrigatório.',
            'email.email' => 'Esse campo tem que ter um email valido.',
            'password.required' => 'Esse campo password é obrigatório.'
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        if (!$authenticated) {
            return redirect()->route('login-index')->withErrors(['error' => 'Invalid email or password']);
        }

        return redirect()->route('login-index')->with('success', 'Logged in');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login-index');
    }
}
