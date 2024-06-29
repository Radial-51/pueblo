<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Mostrar el formulario de inicio de sesión
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            if (auth()->user()->role == 'admin') {
                return redirect()->route('home'); // Redirigir al dashboard de admin
            } else {
                return redirect()->route('usuarios'); // Redirigir al dashboard de usuario normal
            }
        } else {
            // Autenticación fallida
            return back()->withErrors([
                'message' => 'El correo electrónico o la contraseña son incorrectos. Por favor, inténtelo de nuevo.',
            ]);
        }
    }

    public function destroy()
    {
        Auth::logout(); // Cerrar sesión del usuario
        return redirect()->route('login'); // Redirigir al formulario de inicio de sesión
    }
}
