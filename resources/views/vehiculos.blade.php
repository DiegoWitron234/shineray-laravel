@extends('layouts.app')

@section('title', 'Vehículos - Shineray')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Vehículos (opcional) -->
    <!-- <link rel="stylesheet" href="{{ asset('main/css/vehiculos.css') }}"> -->
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <!-- Incluye estilos de Bootstrap si no los tienes en tu layout -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
@endsection

@section('content')

    @include('partials.cotizacion-partial')

    <!-- Encabezado -->
    <div class="container my-5" data-aos="fade-in">
        <h1 class="display-4 text-center">Catálogo de Vehículos</h1>
        <p class="lead text-center">Todos nuestros automóviles.</p>
    </div>

    <!-- Carrusel de Vehículos -->
    @if($vehiculos->count() > 0)
        <div id="vehiculosCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">

                @foreach($vehiculos as $index => $vehiculo)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="container py-4">
                            <!-- Nombre del modelo arriba de las imágenes -->
                            <h2 class="text-center mb-4">
                                {{ $vehiculo->tipo }} {{ $vehiculo->modelo }}
                            </h2>

                            <div class="row align-items-center">
                                <!-- Columna Izquierda: Imagen de vehículo con fondo verde -->
                                <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                                    @if($vehiculo->catalogo)
                                        <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->catalogo) }}"
                                             alt="{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}"
                                             class="img-fluid"
                                             style="max-height: 500px;">
                                    @else
                                        <img src="{{ asset('main/images/placeholder.svg') }}"
                                             alt="Sin imagen"
                                             class="img-fluid"
                                             style="max-height: 500px;">
                                    @endif
                                </div>

                                <!-- Columna Derecha: Imagen con datos (detalles) y botones -->
                                <div class="col-12 col-md-6 text-center">
                                    @if($vehiculo->detalles)
                                        <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->detalles) }}"
                                             alt="Detalles {{ $vehiculo->modelo }}"
                                             class="img-fluid"
                                             style="max-height: 500px;">
                                    @else
                                        <img src="{{ asset('main/images/placeholder.svg') }}"
                                             alt="Sin imagen de detalles"
                                             class="img-fluid"
                                             style="max-height: 500px;">
                                    @endif

                                    <!-- Botones Cotizar / Ver Catálogo (centrados) -->
                                    <div class="mt-4">
                                        <a href="#"
                                           class="btn btn-danger me-3 btn-cotizar"
                                           data-modelo="{{ $vehiculo->modelo }}">
                                            Cotizar</a>

                                        <a href="{{ route('vehiculo_detalles', $vehiculo->id) }}"
                                           class="btn btn-outline-danger btn-info"
                                           style="min-width: 150px;">
                                            Ver Catálogo
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Flecha izquierda de Bootstrap -->
            <button class="carousel-control-prev" type="button"
                    data-bs-target="#vehiculosCarousel" data-bs-slide="prev"
                    style="filter: invert(31%) sepia(83%) saturate(7490%) hue-rotate(1deg) brightness(94%) contrast(121%);">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <!-- Flecha derecha de Bootstrap -->
            <button class="carousel-control-next" type="button"
                    data-bs-target="#vehiculosCarousel" data-bs-slide="next"
                    style="filter: invert(31%) sepia(83%) saturate(7490%) hue-rotate(1deg) brightness(94%) contrast(121%);">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    @else
        <div class="container">
            <p class="text-center fs-5">No hay vehículos disponibles en este momento.</p>
        </div>
    @endif

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    <!-- Si no incluyes Bootstrap en tu layout, inclúyelo aquí -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
@endsection
