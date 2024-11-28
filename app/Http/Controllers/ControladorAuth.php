<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Usuario;

class ControladorAuth extends Controller
{
    // Mostrar formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar inicio de sesión
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario por su email
        $user = Usuario::where('email', $request->email)->first();

        // Verificar las credenciales
        if ($user && Hash::check($request->password, $user->password)) {
            // Las credenciales son correctas, proceder con el login
            Auth::login($user);
            Log::info('Usuario autenticado correctamente: ', ['user' => $user->email]);

            // Redirigir al dashboard o la URL a la que querían acceder
            return redirect()->intended('/dashboard');
        }

        // Log de intento fallido
        Log::warning('Intento de inicio de sesión fallido: ', ['email' => $request->email]);

        // Retornar error de credenciales incorrectas
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        // Cerrar sesión del usuario
        Auth::guard('web')->logout();

        // Invalidar y regenerar token de sesión
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir al login
        return redirect('/login');
    }

    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register'); // Asegúrate de que la vista esté en resources/views/auth/register.blade.php
    }

    // Método de registro
    public function register(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'celular' => 'nullable|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear el usuario
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'celular' => $request->celular,
            'password' => Hash::make($request->password), // Encriptar la contraseña
        ]);

        // Iniciar sesión automáticamente después del registro
        Auth::login($usuario);

        // Redirigir a la página deseada después del registro (por ejemplo, el dashboard)
        return redirect('/index');
    }
}
