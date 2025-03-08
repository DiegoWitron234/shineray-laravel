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

    <style>
        /* ==========================
           Estilos generales y resets
           ========================== */
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        body {
            padding-top: 70px; /* Ajustar según la altura del navbar */
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        /* ==========================
           Navbar y cabecera
           ========================== */
        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1),
            inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        /* ==========================
           Footer oscuro estilo Shineray
           ========================== */
        .shineray-footer {
            background-color: #2b2b2b; /* Fondo oscuro */
            color: #fff;
            position: relative; /* Para posicionar el botón TOP dentro del footer */
            padding: 20px 0;
            font-size: 0.9rem;
            margin-top: 2rem; /* Separación del contenido */
        }
        .shineray-footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .shineray-footer a:hover {
            color: #ccc;
        }
        .shineray-footer .footer-logo {
            max-height: 40px; /* Ajusta según tu imagen */
        }
        .shineray-footer .footer-link {
            font-weight: 500;
            margin-left: 10px;
        }
        .shineray-footer .social-icon img {
            width: 24px;  /* Ajusta según el tamaño deseado */
            height: 24px;
            margin-left: 15px;
            transition: transform 0.3s ease;
        }
        .shineray-footer .social-icon img:hover {
            transform: scale(1.2);
        }
        .btn-back-to-top {
            position: absolute;
            right: 20px;
            bottom: 20px;
            background-color: #444;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-back-to-top:hover {
            background-color: #666;
        }

        /* ==========================
           Ajustes varios
           ========================== */
        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bs-white: #FFFFFF;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
            z-index: 1500;
        }
        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

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

<!-- Mensajes flash (éxito o error) -->
<div class="container mt-3">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session('message'))
        <div class="container mt-3">
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        </div>
    @endif
</div>

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
                    <img src="{{ asset('main/images/facebook.png') }}" alt="Facebook">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/instagram.png') }}" alt="Instagram">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/youtube.png') }}" alt="YouTube">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('main/images/tiktok.png') }}" alt="TikTok">
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
