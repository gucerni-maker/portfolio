<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // ===== 1. Validación robusta =====
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:100',
                'regex:/^[\p{L}\p{M}\s.,\-\'áéíóúüñÁÉÍÓÚÜÑ]+$/u' // Solo letras, espacios y caracteres latinos
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
            'message' => [
                'required',
                'string',
                'min:10', // Mínimo 10 caracteres
                'max:2000' // Aumentado de 1000 a 2000
            ],
            // Honeypot field (opcional, pero recomendado)
            'website' => 'nullable|string|max:50'
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.regex' => 'El nombre solo puede contener letras y espacios',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Formato de correo inválido',
            'message.required' => 'El mensaje es obligatorio',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres',
            'message.max' => 'El mensaje es demasiado largo'
        ]);

        // ===== 2. Protección honeypot contra bots =====
        if (!empty($request->input('website'))) {
            // Es un bot, ignorar silenciosamente
            Log::warning('Bot detected filling contact form', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);
            return redirect()->to(url()->previous() . '#contacto')
                ->with('success', 'Mensaje recibido correctamente');
        }

        // ===== 3. Sanitización adicional (defensa en profundidad) =====
        $name = strip_tags(trim($validated['name']));
        $email = filter_var(trim($validated['email']), FILTER_SANITIZE_EMAIL);
        $message = strip_tags(trim($validated['message']));

        // ===== 4. Protección contra rate limiting (máximo 3 intentos por IP cada 5 minutos) =====
        $ip = $request->ip();
        $attemptsKey = 'contact_attempts_' . $ip;
        $attempts = cache()->get($attemptsKey, 0);

        if ($attempts >= 3) {
            Log::warning('Rate limit exceeded for contact form', ['ip' => $ip]);
            return redirect()->to(url()->previous() . '#contacto')
                ->withErrors(['message' => 'Demasiados intentos. Por favor espera unos minutos.']);
        }

        // Incrementar contador
        cache()->put($attemptsKey, $attempts + 1, now()->addMinutes(5));

        // ===== 5. Prevenir inyección de headers en el email =====
        $name = preg_replace('/[\r\n]/', '', $name); // Eliminar saltos de línea
        $email = preg_replace('/[\r\n]/', '', $email);

        // ===== 6. Construir contenido del email de forma segura =====
        $content = "
        Nombre: " . htmlspecialchars($name) . "
        Correo: " . htmlspecialchars($email) . "
        IP: {$ip}
        Fecha: " . now()->format('Y-m-d H:i:s') . "

        Mensaje:
        " . htmlspecialchars($message) . "
        ";

        try {
            // ===== 7. Enviar email =====
            Mail::raw($content, function ($message) use ($name, $email) {
                $message->to('ejemplo@gmail.com')
                        ->subject('Nuevo mensaje desde el portafolio - ' . now()->format('Y-m-d'))
                        ->from(config('mail.from.address', 'noreply@tudominio.com'), 'Portafolio')
                        ->replyTo($email, $name);
            });

            // ===== 8. Registrar en log para auditoría =====
            Log::info('Contact form submitted successfully', [
                'name' => $name,
                'email' => $email,
                'ip' => $ip,
                'timestamp' => now()
            ]);

            return redirect()->to(url()->previous() . '#contacto')
                ->with('success', '¡Mensaje enviado correctamente! Te responderé pronto.');

        } catch (\Exception $e) {
            // ===== 9. Manejo de errores =====
            Log::error('Error sending contact form email: ' . $e->getMessage(), [
                'ip' => $ip,
                'email' => $email
            ]);

            return redirect()->to(url()->previous() . '#contacto')
                ->withErrors(['message' => 'Error al enviar el mensaje. Por favor inténtalo más tarde.']);
        }
    }
}
