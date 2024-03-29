<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function setTheme(Request $request)
    {
        $theme = $request->input('theme'); // Obtener el tema enviado desde el formulario

        // Validar el tema (opcional)
        if (!in_array($theme, ['light', 'dark'])) {
            return redirect()->back()->with('error', 'Tema no válido.');
        }

        // Actualizar el tema en la variable de sesión
        session(['theme' => $theme]);

        return redirect()->back()->with('success', 'Tema actualizado correctamente.');
    }
}
