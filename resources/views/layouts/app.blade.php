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

    <style>
        body {
            background-color: #121212;
            color: #f5f5f5;
        }
        .navbar {
            background-color: #1a1a1a;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            color: #f5f5f5; /* texto blanco dentro de la card */
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.6);
        }
        .list-group-item {
            background-color: #1e1e1e;
            border: none;
            color: #f5f5f5;
        }
        footer {
            background-color: #1a1a1a;
            padding: 20px;
            text-align: center;
        }
        a {
            color: #0dcaf0;
            text-decoration: none;
        }
        a:hover {
            color: #0bb8d9;
        }

        .contact-form input,
        .contact-form textarea {
            transition: all 0.2s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            background-color: #495057;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }

        .contact-form button {
            transition: all 0.2s ease;
        }

        .contact-form button:hover {
            transform: translateY(-1px);
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
                <form action="{{ route('contact.send') }}" method="POST" class="contact-form d-flex flex-column gap-2">
                    @csrf
                    <input type="text" name="name" placeholder="Nombre" class="form-control bg-secondary text-light border-0" required>
                    <input type="email" name="email" placeholder="Correo electrónico" class="form-control bg-secondary text-light border-0" required>
                    <textarea name="message" rows="3" placeholder="Mensaje" class="form-control bg-secondary text-light border-0" required></textarea>
                    <button type="submit" class="btn btn-outline-info btn-sm align-self-start">
                        Enviar mensaje
                    </button>
                </form>
            </div>

            <!-- Redes -->
            <div class="col-md-4 text-md-end">
                <h5 class="text-info">Redes</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="#" target="_blank">
                        <i class="bi bi-linkedin"></i> LinkedIn
                    </a>
                    <a href="#" target="_blank">
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
