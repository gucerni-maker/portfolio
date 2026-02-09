# Portafolio Personal
Portafolio web personal construido con Laravel para mostrar mis habilidades y proyectos desarrollados.

## Descripción
Este proyecto es un portafolio personal que muestra:
- Mi experiencia y habilidades técnicas
- Proyectos web desarrollados
- Información de contacto
- Formulario de contacto funcional con envío de correos electrónicos

## Características
-  Diseño moderno y responsive
-  Formulario de contacto con envío de emails
-  Secciones interactivas
-  Despliegue fácil con Docker (Laravel Sail)
-  Totalmente responsive para móviles y tablets

## Requisitos
Antes de comenzar, asegúrate de tener instalado:

- **Docker**
- **Docker Compose**
- **Git**

## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/gucerni-maker/portafolio.git
cd portafolio

Instalar dependencias de Composer
composer install

Configurar variables de entorno
cp .env.example .env
php artisan key:generate

Configurar el correo electrónico (Formulario de contacto)
MAIL_MAILER=smtp
MAIL_HOST=tu-smtp-host.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@ejemplo.com
MAIL_PASSWORD=tu-contraseña
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu-email@ejemplo.com
MAIL_FROM_NAME="${APP_NAME}"

Servicios de correo recomendados:
Gmail: Usa App Password si tienes 2FA activado
Mailgun: Ideal para producción
SendGrid: Alternativa robusta
Mailtrap: Perfecto para entornos de desarrollo (no envía emails reales)

Iniciar el entorno con Laravel Sail
./vendor/bin/sail up -d
 
Acceder a la aplicación
http://localhost

Si tienes Apache u otros servicios usando el puerto 80, puedes cambiar el puerto en .env:
APP_PORT=8080
Luego reinicia Sail:
./vendor/bin/sail down && ./vendor/bin/sail up -d
Y accede a: http://localhost:8080

Comandos útiles de Sail
# Iniciar contenedores
./vendor/bin/sail up -d

# Detener contenedores
./vendor/bin/sail down

# Ver logs en tiempo real
./vendor/bin/sail logs -f

# Acceder al contenedor de Laravel
./vendor/bin/sail shell

# Ejecutar comandos Artisan
./vendor/bin/sail artisan [comando]

# Ejecutar migraciones (si aplica)
./vendor/bin/sail artisan migrate

# Ejecutar tests
./vendor/bin/sail test

Configuración del Formulario de Contacto
El formulario de contacto está configurado en app/Http/Controllers/ContactController.php.
Para personalizar el correo destino, edita el método correspondiente:
\Mail::to('tu-email@ejemplo.com')->send(new ContactFormMail($data));
