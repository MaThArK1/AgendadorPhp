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

    public function authenticate($email, $password)
    {
        // Validação dos dados
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('login-index')->withErrors(['error' => 'Esse campo tem que ter um email valido.']);
        }
    
        if (empty($password)) {
            return redirect()->route('login-index')->withErrors(['error' => 'Esse campo password é obrigatório.']);
        }
    
        // Autenticação
        $credentials = ['email' => $email, 'password' => $password];
        $authenticated = Auth::attempt($credentials);
    
        if (!$authenticated) {
            return redirect()->route('login-index')->withErrors(['error' => 'Invalid email or password']);
        }
    
        return redirect()->route('home-page')->with('success', 'Logged in');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login-index');
    }
}
