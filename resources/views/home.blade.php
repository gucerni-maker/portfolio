@extends('layouts.app')

@section('content')
    <!-- Hero Mejorado -->
<section class="text-center py-5 position-relative" style="background: linear-gradient(135deg, #0f172a, #1e293b);">
    <!-- Fondo con patrón de cuadrícula sutil -->
    <div class="position-absolute w-100 h-100" style="
        background: 
            linear-gradient(rgba(12, 74, 110, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(12, 74, 110, 0.05) 1px, transparent 1px),
            linear-gradient(135deg, #0f172a, #1e293b);
        background-size: 40px 40px;
        z-index: 0;
    "></div>

    <div class="position-relative z-1 container">
        <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
            <!-- Icono técnico -->
            <div class="bg-dark p-3 rounded-circle border border-info" style="background-color: #0a192f !important;">
                <i class="bi bi-cpu fs-1 text-info"></i>
            </div>
            <h1 class="display-4 fw-bold text-white mb-0">¡Hola! Soy Gustavo</h1>
        </div>
        
        <p class="lead text-light mb-4" style="max-width: 800px; margin: 0 auto;">
            Fullstack Developer especializado en <span class="text-info fw-bold">Laravel</span> e <span class="text-info fw-bold">infraestructura AWS</span>. 
            He desplegado proyectos reales en <span class="text-info fw-bold">EC2</span> desde cero: 
            instalación de PHP, MySQL, Composer y configuración segura.
        </p>

        <!-- Badges con categorización -->
        <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
            <span class="badge" style="background-color: #1e40af; color: white;">AWS EC2</span>
            <span class="badge" style="background-color: #059669; color: white;">Laravel</span>
            <span class="badge" style="background-color: #b45309; color: white;">Linux</span>
            <span class="badge" style="background-color: #7e22ce; color: white;">MySQL</span>
            <span class="badge" style="background-color: #0891b2; color: white;">PHP</span>
        </div>

        <a href="#proyectos" class="btn btn-info btn-lg px-5 py-3 shadow-lg">
            <i class="bi bi-arrow-down-circle me-2"></i>Ver mis proyectos
        </a>
    </div>
</section>

<section class="mb-5 py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="text-info mb-4">Sobre mí</h2>
                <p class="text-gray-300 fs-5">
                    Soy desarrollador backend enfocado en crear soluciones <span class="text-emerald-400 font-medium">escalables</span> y 
                    <span class="text-amber-40 font-medium">seguras</span>. 
                    Mi experiencia incluye:
                </p>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex gap-2 mb-2">
                        <i class="bi bi-check-circle text-info"></i>
                        <span>Despliegue en AWS EC2 desde cero (Linux + PHP + MySQL)</span>
                    </li>
                    <li class="d-flex gap-2 mb-2">
                        <i class="bi bi-check-circle text-info"></i>
                        <span>Configuración de entornos seguros con variables de entorno</span>
                    </li>
                    <li class="d-flex gap-2">
                        <i class="bi bi-check-circle text-info"></i>
                        <span>Gestión de dependencias con Composer y optimización de rendimiento</span>
                    </li>
                </ul>
            </div>
            <!-- Elemento visual técnico -->
            <div class="col-md-6 text-center">
                <div class="bg-gray-800 rounded-3 p-4 shadow-lg border border-gray-700">
                    <div class="d-flex justify-content-center mb-3">
                        <span class="bg-blue-900 text-white px-3 py-1 rounded">EC2</span>
                        <span class="bg-purple-900 text-white px-3 py-1 rounded ms-2">Laravel</span>
                    </div>
                    <div class="text-gray-400" style="font-family: 'Courier New', monospace; font-size: 0.9rem;">
                        $ sudo apt install php mysql-server<br>
                        $ composer create-project laravel/laravel<br>
                        $ aws ec2 run-instances --image-id ami-0...
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Proyectos -->
    <section id="proyectos" class="mb-5">
        <h2 class="text-center text-info mb-4 mt-5">Mis Proyectos</h2>
        <div class="row g-4">
            <!-- Proyecto 1 -->
            <div class="col-md-4">
                <div class="card bg-dark text-light shadow-lg h-100">
                    <video autoplay loop muted playsinline class="card-img-top">
                        <source src="{{ asset('images/pkmn4.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-info">Proyecto PokeAPI</h5>
                        <p class="card-text">Aplicación en Laravel que consume la PokeAPI para mostrar información de Pokémon en tiempo real.</p>
                        <a href="http://pokedex.56.125.101.83.nip.io/" class="btn btn-outline-info">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-md-4">
                <div class="card bg-dark text-light shadow-lg h-100">
                    <video autoplay loop muted playsinline class="card-img-top">
                        <source src="{{ asset('images/monitoreo5.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-info">Sistema de Monitoreo</h5>
                        <p class="card-text">Monitorear el estado de servidores, con el cual se puede saber el consumo de recursos de Hardware</p>
                        <a href="http://monitoreo.56.125.101.83.nip.io/" class="btn btn-outline-info">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-md-4">
                <div class="card bg-dark text-light shadow-lg h-100">
                    <video autoplay loop muted playsinline class="card-img-top">
                        <source src="{{ asset('images/actas.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-info">Sistema de Actas</h5>
                        <p class="card-text">Sistema en Laravel y MySQL para la creación y gestión de actas de entrega, con la finalidad de llevar un control .</p>
                        <a href="http://actas.56.125.101.83.nip.io/" class="btn btn-outline-info">Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
<section class="mb-5 py-5">
    <h2 class="text-center text-info mb-4">Conocimientos</h2>
    <div class="row text-center g-4">
        <!-- Lenguajes -->
        <div class="col-md-3">
            <div class="p-4 rounded-3 shadow-sm" style="
                background: linear-gradient(145deg, #111827, #0f172a);
                border: 1px solid rgba(59, 130, 246, 0.3);
                transition: all 0.3s;
                height: 100%;
            " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 25px rgba(59, 130, 246, 0.2)'; this.style.borderColor='rgba(59, 130, 246, 0.6)';" 
            onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.3)'; this.style.borderColor='rgba(59, 130, 246, 0.3)';">
                <div class="mb-3">
                    <div class="d-inline-block p-3 rounded-circle" style="background-color: rgba(139, 92, 246, 0.15);">
                        <i class="bi bi-code-slash fs-2" style="color: #8b5cf6;"></i>
                    </div>
                </div>
                <h5 class="mt-2 text-white">Lenguajes</h5>
                <p class="text-gray-400 mb-0" style="color: #94a3b8;">PHP, Python, JavaScript, C++, Java</p>
            </div>
        </div>

        <!-- Bases de Datos -->
        <div class="col-md-3">
            <div class="p-4 rounded-3 shadow-sm" style="
                background: linear-gradient(145deg, #111827, #0f172a);
                border: 1px solid rgba(59, 130, 246, 0.3);
                transition: all 0.3s;
                height: 100%;
            " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 25px rgba(239, 68, 68, 0.2)'; this.style.borderColor='rgba(239, 68, 68, 0.6)';" 
            onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.3)'; this.style.borderColor='rgba(59, 130, 246, 0.3)';">
                <div class="mb-3">
                    <div class="d-inline-block p-3 rounded-circle" style="background-color: rgba(239, 68, 68, 0.15);">
                        <i class="bi bi-database fs-2" style="color: #ef4444;"></i>
                    </div>
                </div>
                <h5 class="mt-2 text-white">Bases de Datos</h5>
                <p class="text-gray-400 mb-0" style="color: #94a3b8;">MySQL, PostgreSQL</p>
            </div>
        </div>

        <!-- Servidores -->
        <div class="col-md-3">
            <div class="p-4 rounded-3 shadow-sm" style="
                background: linear-gradient(145deg, #111827, #0f172a);
                border: 1px solid rgba(59, 130, 246, 0.3);
                transition: all 0.3s;
                height: 100%;
            " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 25px rgba(59, 130, 246, 0.2)'; this.style.borderColor='rgba(59, 130, 246, 0.6)';" 
            onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.3)'; this.style.borderColor='rgba(59, 130, 246, 0.3)';">
                <div class="mb-3">
                    <div class="d-inline-block p-3 rounded-circle" style="background-color: rgba(59, 130, 246, 0.15);">
                        <i class="bi bi-hdd-network fs-2" style="color: #3b82f6;"></i>
                    </div>
                </div>
                <h5 class="mt-2 text-white">Servidores</h5>
                <p class="text-gray-400 mb-0" style="color: #94a3b8;">Linux, Apache, Docker</p>
            </div>
        </div>

        <!-- Otros -->
        <div class="col-md-3">
            <div class="p-4 rounded-3 shadow-sm" style="
                background: linear-gradient(145deg, #111827, #0f172a);
                border: 1px solid rgba(59, 130, 246, 0.3);
                transition: all 0.3s;
                height: 100%;
            " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 25px rgba(16, 185, 129, 0.2)'; this.style.borderColor='rgba(16, 185, 129, 0.6)';" 
            onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.3)'; this.style.borderColor='rgba(59, 130, 246, 0.3)';">
                <div class="mb-3">
                    <div class="d-inline-block p-3 rounded-circle" style="background-color: rgba(16, 185, 129, 0.15);">
                        <i class="bi bi-shield-lock fs-2" style="color: #10b981;"></i>
                    </div>
                </div>
                <h5 class="mt-2 text-white">Otros</h5>
                <p class="text-gray-400 mb-0" style="color: #94a3b8;">Ciberseguridad, Automatización</p>
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
