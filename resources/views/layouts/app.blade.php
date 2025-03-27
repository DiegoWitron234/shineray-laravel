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

{{-- Incluir el navbar --}}
@include('partials.navbar')

<main>
    @if (session('status'))
        <div class="container mt-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        </div>
    @endif

    @yield('content')
</main>

{{-- Incluir el footer --}}
@include('partials.footer')

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
