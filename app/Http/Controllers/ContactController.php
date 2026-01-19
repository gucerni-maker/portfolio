<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        $content = "
        Nombre: {$request->name}
        Correo: {$request->email}

        Mensaje:
        {$request->message}
        ";

        Mail::raw($content, function ($message) use ($request) {
            $message->to('gucerni@gmail.com')
                    ->subject('Nuevo mensaje desde el portafolio');
        });

        //return back()->with('success', 'Mensaje enviado correctamente.');
        return redirect()->to(url()->previous() . '#contacto')
        ->with('success', 'Mensaje enviado correctamente');

    }
}
