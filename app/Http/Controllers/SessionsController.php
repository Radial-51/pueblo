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
        $credentials = request()->only('email', 'password');

        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'message' => 'El correo electrónico o contraseña es incorrecto, por favor intente nuevamente',
            ]);
        }

        if (auth()->user()->role == 'admin') {
            return redirect()->route('home');
        } else {
            return redirect()->route('usuarios');
        }
    }

    public function destroy() {
        auth()->logout();
        return redirect()->to('/login');
    }
}
