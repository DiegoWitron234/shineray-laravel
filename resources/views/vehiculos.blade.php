@extends('layouts.app')

@section('title', 'Vehículos - Shineray')

@section('extra_head')
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Estilos exclusivos -->
    <link rel="stylesheet" href="{{ asset('main/css/vehiculos.css') }}">
@endsection

@section('content')

    @include('partials.cotizacion-partial')
    @include('partials.whatsapp')

    <!-- Encabezado con menos espacio -->
    <!-- Cambiamos .my-5 a algo menor, p. ej. .my-3 -->
    <div class="container my-3" data-aos="fade-in">
        <h1 class="display-4 text-center mb-2">Vehículos</h1>
        <p class="lead text-center mb-4">Todos nuestros automóviles.</p>
    </div>

    <!-- Carrusel de Vehículos -->
    @if($vehiculos->count() > 0)
        <!-- Quitamos py-4 o la reducimos a py-1 para menos espacio vertical -->
        <div id="vehiculosCarousel" class="carousel slide" data-bs-ride="false" style="margin-top: -10px;">
            <div class="carousel-inner">

                @foreach($vehiculos as $index => $vehiculo)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <!-- Contenedor principal con menos padding vertical -->
                        <div class="container py-1">
                            <!-- En vez de <h2> con .mb-4, reducimos margen o lo quitamos -->
                            <div class="text-center precio-container">
                                @if($vehiculo->imagen_precio)
                                    <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->imagen_precio) }}"
                                         alt="Precio {{ $vehiculo->modelo }}"
                                         class="img-fluid imagen-precio"
                                @else
                                    <h2 class="text-center mb-2">
                                        {{ $vehiculo->precio }}
                                    </h2>
                                @endif
                            </div>

                            <div class="row align-items-center">
                                <!-- Imagen izquierda -->
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

                                <!-- Imagen de detalles con botones superpuestos -->
                                <div class="col-12 col-md-6">
                                    <div class="details-container position-relative" style="max-height: 500px;">
                                        @if($vehiculo->detalles)
                                            <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->detalles) }}"
                                                 alt="Detalles {{ $vehiculo->modelo }}"
                                                 class="img-fluid details-image"
                                                 style="max-height: 500px; width: 100%;">
                                        @else
                                            <img src="{{ asset('main/images/placeholder.svg') }}"
                                                 alt="Sin imagen de detalles"
                                                 class="img-fluid details-image"
                                                 style="max-height: 500px; width: 100%;">
                                        @endif

                                        <div class="buttons-overlay">
                                            <a href="#"
                                               class="btn-cotizar me-3"
                                               data-modelo="{{ $vehiculo->modelo }}">
                                                Cotizar
                                            </a>
                                            <a href="{{ route('vehiculo_detalles', $vehiculo->id) }}"
                                               class="btn-info">
                                                Ver Catálogo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- container -->
                    </div>
                @endforeach

            </div><!-- carousel-inner -->

            <!-- Flecha izquierda -->
            <button class="carousel-control-prev" type="button"
                    data-bs-target="#vehiculosCarousel" data-bs-slide="prev">
                <img src="{{ asset('main/images/elementos/flechaIz.png') }}"
                     alt="Anterior"
                     class="custom-arrow">
                <span class="visually-hidden">Anterior</span>
            </button>

            <!-- Flecha derecha -->
            <button class="carousel-control-next" type="button"
                    data-bs-target="#vehiculosCarousel" data-bs-slide="next">
                <img src="{{ asset('main/images/elementos/flechaDe.png') }}"
                     alt="Siguiente"
                     class="custom-arrow">
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
@endsection
