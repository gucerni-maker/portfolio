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

- Git
    sudo apt install git
    
- Docker y docker compose
    sudo apt install apt-transport-https ca-certificates curl software-properties-common -y
    
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
    
    echo \
    "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu \
    $(. /etc/os-release && echo "$UBUNTU_CODENAME") stable" | \
    sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
    
    sudo apt update
    sudo apt install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

    sudo usermod -aG docker ${USER}

## Instalación

# Descargar e ingresar al directorio
- git clone https://github.com/gucerni-maker/portfolio.git
- cd portfolio

# Otorgar permisos
- chmod -R 775 storage bootstrap/cache

# Instalar dependencias
- docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs

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

# Construir la imagen
./vendor/bin/sail up -d

# Generar clave de aplicación
- ./vendor/bin/sail artisan key:generate

# Ejecutar las migraciones
- ./vendor/bin/sail artisan migrate 

# Acceder a la aplicacion
- http://localhost:8080
