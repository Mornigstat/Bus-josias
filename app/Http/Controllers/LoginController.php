<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Ajout de l'importation pour utiliser la classe Auth

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("compte.login");
    }

    public function login(Request $request)
    {
        // Validation des données
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentative de connexion
        if (Auth::attempt($credentials)) {
            // Authentification réussie
            return redirect()->intended(route('dashboard'));
        } else {
            // Authentification échouée
            return redirect()->route('login')->with('error', 'Identifiants incorrects');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
