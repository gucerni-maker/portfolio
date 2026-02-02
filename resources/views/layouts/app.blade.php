<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
    body {
        background-color: #0f172a;
        background-image: 
            radial-gradient(circle at 10% 20%, rgba(59, 130, 246, 0.08) 0%, transparent 25%),
            radial-gradient(circle at 90% 80%, rgba(13, 148, 136, 0.08) 0%, transparent 25%),
            radial-gradient(circle at 50% 50%, rgba(168, 85, 247, 0.05) 0%, transparent 30%);
        background-attachment: fixed;
        color: #e2e8f0;
        font-family: 'Poppins', -apple-system, sans-serif;
    }
    
    .navbar {
        background-color: rgba(26, 32, 44, 0.95);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(59, 130, 246, 0.2);
    }
    
.card {
    background: linear-gradient(145deg, #111827, #0f172a);
    border: 1px solid rgba(59, 130, 246, 0.2);
    color: #f1f5f9;
    transition: all 0.3s;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}
    
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(59, 130, 246, 0.25);
    border-color: rgba(59, 130, 246, 0.5);
}
    
    .list-group-item {
        background-color: #1e293b;
        border-color: rgba(64, 74, 92, 0.5);
        color: #e2e8f0;
    }
    
footer {
    background: linear-gradient(to bottom, #0f172a, #0a0f1a);
    border-top: 1px solid rgba(59, 130, 246, 0.2);
}
    
    a {
        color: #38bdf8;
        text-decoration: none;
        transition: color 0.2s;
    }
    
    a:hover {
        color: #0ea5e9;
    }
    
    h1, h2, h3, h4, h5 {
        font-weight: 700;
        letter-spacing: -0.5px;
    }
    
    .badge {
        transition: transform 0.2s;
    }
    
    .badge:hover {
        transform: scale(1.05);
    }
</style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="{{ url('/') }}">Mi Portafolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Footer -->

<footer id="contacto" class="mt-5 bg-dark text-light">
    <div class="container py-5">
        <div class="row gy-4">

            <!-- Sobre mí -->
            <div class="col-md-4">
                <h5 class="text-info">Sobre mí</h5>
                <p class="small">
                    Desarrollador de software especializado en Laravel, MySQL y administración de servidores Linux.
                    Enfocado en crear soluciones prácticas, seguras y bien estructuradas.
                </p>
            </div>

            <!-- Contacto -->
            <div class="col-md-4">
                <h5 class="text-info">Contacto</h5>
                @if(session('success'))
                    <div class="alert alert-success py-2">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger py-2">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('contact.send') }}" method="POST" class="contact-form d-flex flex-column gap-3">
                @csrf

                    <!-- Honeypot field - invisible para humanos -->
                    <div style="display:none; position:absolute; left:-9999px;">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" autocomplete="off">
                    </div>
                
                    <!-- Resto del formulario igual -->
                    <input type="text" name="name" placeholder="Nombre" class="form-control bg-secondary text-light border-0" required>
                    <input type="email" name="email" placeholder="Correo electrónico" class="form-control bg-secondary text-light border-0" required>
                    <textarea name="message" rows="4" placeholder="Mensaje" class="form-control bg-secondary text-light border-0" required></textarea>
                    <button type="submit" class="btn btn-info">Enviar mensaje</button>
                </form>
            </div>

            <!-- Redes -->
            <div class="col-md-4 text-md-end">
                <h5 class="text-info">Redes</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="https://www.linkedin.com/in/gustavo-cerda-a63605384" target="_blank">
                        <i class="bi bi-linkedin"></i> LinkedIn
                    </a>
                    <a href="https://github.com/gucerni-maker" target="_blank">
                        <i class="bi bi-github"></i> GitHub
                    </a>
                </div>

                <p class="small mt-3 mb-0">
                    © {{ date('Y') }} Gustavo Cerda
                </p>
            </div>

        </div>
    </div>
</footer>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
