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

- Docker
- Docker Compose
- Git

## Instalación

# Descargar e ingresar al directorio
- git clone https://github.com/gucerni-maker/portfolio.git
- cd portfolio

# Otorgar permisos
- chmod -R 775 storage bootstrap/cache

# Instalar dependencias
- composer install

# Configurar variables de entorno
- cp .env.example .env
- nano .env

# configurar archivo .env
APP_PORT=8080
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

MAIL_MAILER=smtp
MAIL_HOST=tu-smtp-host.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@ejemplo.com
MAIL_PASSWORD=tu-contraseña
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu-email@ejemplo.com
MAIL_FROM_NAME="${APP_NAME}"

# Servicios de correo recomendados:
Gmail: Usa App Password si tienes 2FA activado
Mailgun: Ideal para producción
SendGrid: Alternativa robusta
Mailtrap: Perfecto para entornos de desarrollo (no envía emails reales)

# Configuración del Formulario de Contacto
El formulario de contacto está configurado en app/Http/Controllers/ContactController.php.
Para personalizar el correo destino, edita el método correspondiente:
$message->to('ejemplo@gmail.com')

# Generar clave de aplicación
- php artisan key:generate

# Construir la imagen
./vendor/bin/sail up -d
 
Acceder a la aplicación
http://localhost

# Acceder a la aplicacion
- http://localhost:8080
