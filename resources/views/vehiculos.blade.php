@extends('layouts.app')

@section('title', 'Vehículos - Shineray')

@section('extra_head')
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <!-- Estilos para mostrar flechas del carrusel si no aparecen por defecto -->
    <style>
        /* Ajusta el tamaño y la visibilidad de los íconos de control del carrusel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
        }
        /* Icono "Anterior" (flecha izquierda) */
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg fill='%23fff' viewBox='0 0 8 8' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4.146.146A.5.5 0 0 1 4.5 0h.707a.5.5 0 0 1 .353.854L3.207 3.207a.5.5 0 0 0 0 .707l2.353 2.353a.5.5 0 0 1-.353.854H4.5a.5.5 0 0 1-.354-.146L1.146 4.146a.5.5 0 0 1 0-.707L4.146.146z'/%3E%3C/svg%3E");
        }
        /* Icono "Siguiente" (flecha derecha) - SVG actualizado */
        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg fill='%23fff' viewBox='0 0 8 8' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M3.854 0L8 4l-4.146 4L4 6.354 6.293 4 4 1.646z'/%3E%3C/svg%3E");
        }
    </style>
@endsection

@section('content')
    <!-- Encabezado -->
    <div class="container my-5" data-aos="fade-in">
        <h1 class="display-4 text-center">Catálogo de Vehículos</h1>
        <p class="lead text-center">Todos nuestros automóviles en un cómodo carrusel.</p>
    </div>

    <!-- Carrusel de vehículos -->
    <div class="container mb-5" data-aos="fade-up">
        <div id="vehicleCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicadores (puntos) del carrusel -->
            <ol class="carousel-indicators">
                @foreach($vehiculos as $index => $vehiculo)
                    <li data-target="#vehicleCarousel" data-slide-to="{{ $index }}"
                        class="{{ $loop->first ? 'active' : '' }}">
                    </li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @forelse($vehiculos as $index => $vehiculo)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-md-6 text-center">
                                @if($vehiculo->imagen)
                                    <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->imagen) }}"
                                         alt="{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}"
                                         class="img-fluid rounded">
                                @else
                                    <img src="{{ asset('main/images/placeholder.svg') }}"
                                         alt="Sin imagen"
                                         class="img-fluid rounded">
                                @endif
                            </div>
                            <div class="col-md-6 text-center">
                                <h2>{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}</h2>
                                <p><strong>Precio:</strong>
                                    {{ '$' . number_format($vehiculo->precio, 0, '.', ',') }} MXN
                                </p>
                                <p>{{ $vehiculo->descripcion }}</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <!-- Botón Cotizar: ajusta la ruta según tu lógica -->
                                    <a href="#" class="btn btn-primary mr-2">
                                        Cotizar
                                    </a>
                                    <!-- Botón Más información -->
                                    <a href="{{ route('vehiculo_detalles', $vehiculo->id) }}"
                                       class="btn btn-secondary">
                                        Más información
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Si no hay vehículos -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center my-5">
                                    No hay vehículos disponibles en este momento.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Controles de siguiente/anterior -->
            <a class="carousel-control-prev" href="#vehicleCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#vehicleCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <!-- Scripts de AOS y Bootstrap Carousel -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
@endsection
