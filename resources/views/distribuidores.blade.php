@extends('layouts.app')

@section('title', 'Distribuidores - Shineray')

@section('extra_head')
    <link rel="stylesheet" href="{{ asset('main/css/distribuidores.css') }}">
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />
@endsection

@section('content')

    @include('partials.whatsapp')

    <!-- Imagen de fondo con título -->
    <div class="hero-section">
        <div class="hero-overlay">
            <h1 class="hero-title">Distribuidores</h1>
        </div>
    </div>

    <!-- Contenedor principal (solo para esta página) -->
    <div class="distribuidores-container">
        <!-- Columna izquierda: Información de Distribuidores -->
        <div class="distribuidor-info">
            <h2 class="title">Distribuidores</h2>
            <p>
                Al ser distribuidor de SHINERAY, formarás parte de una marca líder en la creación de vehículos de alto rendimiento, reconocida por su innovación y calidad a nivel mundial.
            </p>
            <p>
                La inversión inicial se recupera rápidamente en comparación con la competencia, y recibirás capacitación y asesoría permanente para impulsar el crecimiento y desarrollo de tu negocio.
            </p>
            <p>
                Contarás con el respaldo de SHINERAY, que te brinda un sólido soporte en todas las áreas de tu negocio, con personal especializado en <strong>REFACCIONES, SERVICIO POST-VENTA y VENTAS.</strong>
            </p>
        </div>

    </div>

    <div id="map" style="width: 100%; height: 400px; margin-top: 20px;"></div>

    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    ></script>
    <script src="{{ asset('main/js/distribuidores.js') }}"></script>
@endsection


