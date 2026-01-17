@extends('layouts.app')

@section('content')
    <!-- Hero Mejorado -->
    <section class="text-center py-5 position-relative" style="background: linear-gradient(135deg, #121212, #1a1a1a);">
        <!-- Fondo sutil opcional -->
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:url('{{ asset('images/tech-pattern.png') }}') center/cover no-repeat; opacity:0.05; z-index:0;"></div>

        <!-- Contenido del Hero -->
        <div class="position-relative z-1">
            <h1 class="display-4 fw-bold text-info mb-3 fade-in">¡Hola! Soy Gustavo</h1>
            <p class="lead text-light mb-4 fade-in" style="animation-delay:0.2s;">
                Desarrollador de software especializado en Laravel, MySQL y administración de servidores Linux.
                Me apasiona crear soluciones prácticas, seguras y elegantes.
            </p>

            <!-- Skills rápidas como badges -->
            <div class="d-flex justify-content-center flex-wrap gap-2 mb-4 fade-in" style="animation-delay:0.4s;">
                <span class="badge bg-info text-dark">Laravel</span>
                <span class="badge bg-info text-dark">MySQL</span>
                <span class="badge bg-info text-dark">PHP</span>
                <span class="badge bg-info text-dark">Linux</span>
                <span class="badge bg-info text-dark">Ciberseguridad</span>
            </div>

            <!-- Botón de acción -->
            <a href="#proyectos" class="btn btn-outline-info btn-lg fade-in" style="animation-delay:0.6s;">Ver mis proyectos</a>
        </div>
    </section>

    <!-- Sobre mí -->
    <section class="mb-5">
        <h2 class="text-center text-info mb-4 fade-in">Sobre mí</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-light fs-5 text-center fade-in">
                    Soy desarrollador de software con experiencia en Laravel, MySQL y administración de servidores Linux. 
                    Me apasiona crear soluciones prácticas, seguras y elegantes, y siempre busco aprender nuevas tecnologías 
                    y mejorar mis proyectos. Fuera del código, disfruto explorando nuevas herramientas de productividad y diseño.
                </p>
            </div>
        </div>
    </section>

    <!-- Proyectos -->
    <section id="proyectos" class="mb-5">
        <h2 class="text-center text-info mb-4">Mis Proyectos</h2>
        <div class="row g-4">
            <!-- Proyecto 1 -->
            <div class="col-md-4">
                <div class="card bg-dark text-light shadow-lg h-100">
                    <video autoplay loop muted playsinline class="card-img-top">
                        <source src="{{ asset('images/pkmn3.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-info">Proyecto PokeAPI</h5>
                        <p class="card-text">Aplicación en Laravel que consume la PokeAPI para mostrar información de Pokémon en tiempo real.</p>
                        <a href="#" class="btn btn-outline-info">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-md-4">
                <div class="card bg-dark text-light shadow-lg h-100">
                    <video autoplay loop muted playsinline class="card-img-top">
                        <source src="{{ asset('images/pkmn3.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-info">Inventario de Videojuegos</h5>
                        <p class="card-text">CRUD en Laravel y MySQL para gestionar stock de videojuegos con interfaz sencilla y funcional.</p>
                        <a href="#" class="btn btn-outline-info">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-md-4">
                <div class="card bg-dark text-light shadow-lg h-100">
                    <video autoplay loop muted playsinline class="card-img-top">
                        <source src="{{ asset('images/pkmn3.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-info">Sistema de Actas</h5>
                        <p class="card-text">CRUD en Laravel y MySQL para la gestión de actas, con un enfoque práctico y seguro.</p>
                        <a href="#" class="btn btn-outline-info">Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="mb-5">
        <h2 class="text-center text-info mb-4">Conocimientos</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <div class="p-3 bg-dark rounded shadow-sm">
                    <i class="bi bi-code-slash fs-2 text-info"></i>
                    <h5 class="mt-2">Lenguajes</h5>
                    <p>PHP, Python, JavaScript, C++, Java</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="p-3 bg-dark rounded shadow-sm">
                    <i class="bi bi-database fs-2 text-info"></i>
                    <h5 class="mt-2">Bases de Datos</h5>
                    <p>MySQL, PostgreSQL</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="p-3 bg-dark rounded shadow-sm">
                    <i class="bi bi-hdd-network fs-2 text-info"></i>
                    <h5 class="mt-2">Servidores</h5>
                    <p>Linux, Apache, Docker</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="p-3 bg-dark rounded shadow-sm">
                    <i class="bi bi-shield-lock fs-2 text-info"></i>
                    <h5 class="mt-2">Otros</h5>
                    <p>Ciberseguridad, Automatización</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Animaciones suaves */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards;
    }
    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }
    /* Se puede agregar delays inline con style="animation-delay:0.2s;" */
</style>
@endpush
