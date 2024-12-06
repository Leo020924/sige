<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validación de los campos de login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirigir al usuario al dashboard si la autenticación es exitosa
            return redirect()->intended(route('dashboard')); // redirige a la página que el usuario intentó acceder antes del login o al dashboard si no hay una.
        }

        // Si no se puede autenticar, redirigir con mensaje de error
        return redirect()->back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput($request->only('email')); // Mantener el valor del email en el campo de entrada en caso de error
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);



        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
    }

    public function showForm()
    {
        return view('register');
    }


    public function showLoginForm()
    {
        return view('login');
    }

    public function showDashboard()
    {

        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
