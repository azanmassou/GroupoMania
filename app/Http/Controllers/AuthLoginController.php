<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    //
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gère la soumission du formulaire de connexion
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentification réussie
            return redirect()->intended('/home');
        }

        // Authentification échouée
        return back()->withErrors([
            'email' => 'Les informations de connexion fournies sont incorrectes.',
        ]);
    }
}
