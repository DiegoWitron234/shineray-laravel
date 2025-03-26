<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CotizarController extends Controller
{

    public function enviar(Request $request)
    {
        // Validar
        $request->validate([
            'estado' => 'required',
            'codigo_postal' => 'required',
            'nombre_completo' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'aviso_privacidad' => 'required',
            'modelo_vehiculo' => 'nullable'
        ]);

        // Tomar el modelo (si se envió)
        $modeloVehiculo = $request->input('modelo_vehiculo', 'No especificado');

        // Enviar correo, ejemplo simple:
        Mail::send('emails.cotizacion', [
            'estado' => $request->estado,
            'codigo_postal' => $request->codigo_postal,
            'nombre_completo' => $request->nombre_completo,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'modelo_vehiculo' => $modeloVehiculo
        ], function($message) {
            $message->to('pruebas@shineraymotogaleria.com')
                ->subject('Nueva Cotización');
        });

        return redirect()->back()->with('status', '¡Solicitud enviada! En breve nos pondremos en contacto contigo.');
    }


}
