@extends('layouts.app')

@section('title', 'Vehículos - Shineray')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Vehículos (opcional) -->
    <!--<link rel="stylesheet" href="{{ asset('main/css/vehiculos.css') }}">-->
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
@endsection

@section('content')
    <!-- Encabezado -->
    <div class="container my-5" data-aos="fade-in">
        <h1 class="display-4 text-center">Catálogo de Vehículos</h1>
        <p class="lead text-center">Todos nuestros automóviles.</p>
    </div>

    <!-- Formulario de búsqueda -->
    <div class="container mb-4">
        <form method="GET" class="row g-3 justify-content-center">
            <div class="col-md-8">
                <input type="text" name="q" class="form-control" placeholder="Buscar modelo">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Buscar</button>
            </div>
        </form>
    </div>

    <!-- Listado de vehículos en formato card -->
    <div class="container">
        <div class="row">
            @forelse($vehiculos as $vehiculo)
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ ($loop->index * 100) }}">
                    <div class="card h-100 shadow-sm">
                        @if($vehiculo->imagen)
                            <img src="{{ asset('storage/' . $vehiculo->imagen) }}" alt="{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}" class="img-fluid rounded hover-lift">
                        @else
                            <img src="{{ asset('main/images/placeholder.svg') }}" alt="Sin imagen" class="img-fluid rounded hover-lift">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}</h5>
                            <p class="card-text"><strong>Precio:</strong> {{ $vehiculo->precio }}</p>
                            <p class="card-text">{{ \Illuminate\Support\Str::words($vehiculo->descripcion, 20) }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('vehiculo_detalles', $vehiculo->id) }}" class="btn btn-secondary">Ver detalles &raquo;</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No hay vehículos disponibles en este momento.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
@endsection
