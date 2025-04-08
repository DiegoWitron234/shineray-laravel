<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function send(Request $request)
    {
        // Validar datos
        $validated = $request->validate([
            'nombre'  => 'required|string|max:255',
            'correo'  => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // Opcional: puedes formatear los datos o agregarlos a un arreglo
        $data = [
            'nombre'  => $validated['nombre'],
            'correo'  => $validated['correo'],
            'mensaje' => $validated['mensaje'],
        ];

        // Enviar el correo.
        Mail::send('emails.contacto', $data, function ($message) use ($data) {
            $message->to('pruebas@shineraymotogaleria.com', 'Shineray')
                ->subject('Nuevo mensaje de contacto de ' . $data['nombre'])
                ->replyTo($data['correo'], $data['nombre']);
        });

        // Redirigir o dar respuesta
        return redirect()->back()->with('message', '¡Tu mensaje ha sido enviado!');
    }
}
