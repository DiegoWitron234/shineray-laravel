<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shineray México')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Archivo de estilos personalizado -->
    <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('main/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('main/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('main/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">


    @yield('extra_head')
</head>
<body>

<!-- Header / Barra de navegación -->
<header class="bg-light border-bottom fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('main/images/logoshineray.png') }}" alt="Logo Shineray" style="height:50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('empresa') ? 'active' : '' }}" href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('vehiculos') ? 'active' : '' }}" href="{{ route('vehiculos') }}">Vehículos</a>
                </li>
          <li class="nav-item me-5">
            <a class="nav-link {{ request()->routeIs('distribuidores') ? 'active' : '' }}" href="{{ route('distribuidores') }}">Distribuidores</a>
          </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>



<!-- Footer Oscuro (Estilo Shineray) -->
<footer class="shineray-footer">
    <div class="container">
        <!-- Fila superior: logotipos y enlaces legales -->
        <div class="row align-items-center">
            <div class="col-md-6 d-flex align-items-center mb-3 mb-md-0">
                <img src="{{ asset('main/images/logoshineray.png') }}" alt="Shineray Logo" class="me-3 footer-logo">
                <!-- Puedes incluir otro logotipo si es necesario -->
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="footer-link me-3">POLÍTICA DE PRIVACIDAD</a>
                <a href="#" class="footer-link">TÉRMINOS Y CONDICIONES</a>
            </div>
        </div>
        <!-- Fila inferior: derechos de autor y redes sociales -->
        <div class="row mt-3 align-items-center">
            <div class="col-md-6">
                <p class="mb-0 text-white-50">DERECHOS DE AUTOR © 2012 - 2025 SHINERAY HOLDING GROUP COMPANY</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/redes-sociales/facebook.png') }}" alt="Facebook">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/redes-sociales/instagram.png') }}" alt="Instagram">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/redes-sociales/youtube.png') }}" alt="YouTube">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/redes-sociales/tiktok.png') }}" alt="TikTok">
                </a>
            </div>
        </div>
        <!-- Botón para volver al inicio -->
        <button id="btnBackToTop" class="btn-back-to-top">TOP</button>
    </div>
</footer>

<!-- Bootstrap JS Bundle (incluye Popper) -->
<script src="{{ asset('main/js/bootstrap.bundle.min.js') }}"></script>

<!-- Script para el botón "TOP" -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnTop = document.getElementById('btnBackToTop');
        btnTop.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>
</body>
</html>
