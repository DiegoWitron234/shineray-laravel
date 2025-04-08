<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CotizarController extends Controller
{
    public function index()
    {
        return view('cotizar');
    }

    public function enviar(Request $request)
    {
        // Validar los datos y almacenarlos en un arreglo
        $data = $request->validate([
            'estado'           => 'required',
            'codigo_postal'    => 'required',
            'nombre_completo'  => 'required',
            'correo'           => 'required|email',
            'telefono'         => 'required',
            'aviso_privacidad' => 'required',
            'modelo_vehiculo'  => 'nullable'
        ]);

        // Asignar un valor por defecto si no se proporcionó el modelo
        $data['modelo_vehiculo'] = $data['modelo_vehiculo'] ? $data['modelo_vehiculo'] : 'No especificado';

        // Enviar el correo utilizando los datos validados
        Mail::send('emails.cotizacion', $data, function ($message) use ($data) {
            $message->to('pruebas@shineraymotogaleria.com')
                ->subject('Nueva Cotización de ' . $data['nombre_completo'])
                ->replyTo($data['correo'], $data['nombre_completo']);
        });

        // Redirigir con mensaje de confirmación
        return redirect()->back()->with('status', '¡Solicitud enviada! En breve nos pondremos en contacto contigo.');
    }
}
