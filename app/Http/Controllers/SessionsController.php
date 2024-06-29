<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create() {
        return view('auth.login'); // Asumo que esto es para mostrar el formulario de inicio de sesión
    }

    public function store() {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo electrónico o contraseña es incorrecto, por favor intente nuevamente',
            ]);
        } else {

            if(auth()->user()->role == 'admin') {
                 // Redirigir a la vista de contacto
                return redirect()->route('home');
            } else {
                // Redirigir a la vista de contacto
                return redirect()->route('usuarios');
            }

        }
    }

    public function destroy() {
        auth()->logout();
        return redirect()->to('/login');
    }
}


