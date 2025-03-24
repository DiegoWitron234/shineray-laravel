@extends('layouts.app')

@section('title', 'Página no encontrada')

@section('extra_head')
    <link rel="stylesheet" href="{{ asset('main/css/404.css') }}">
@endsection

@section('content')
    <div class="container-404">
        <!-- Contenedor principal del mensaje -->
        <div class="error-content">
            <div class="car-road">
                <!-- Imagen del auto -->
                <img src="{{ asset('main/images/carro404.png') }}" alt="Auto perdido" class="car">
            </div>
            <!-- Título principal (el número 404 o el texto de error) -->
            <h1 class="error-title">404</h1>
            <p class="error-message">
                Lo sentimos, parece que el GPS nos ha llevado por el camino equivocado.
                <br>¡Recalculando!
            </p>
            <p class="error-instructions">
                Dirígete a la <a href="{{ url('/') }}">página de inicio</a> para volver a la ruta correcta.
            </p>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script src="{{ asset('main/js/404.js') }}"></script>
@endsection
