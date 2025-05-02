@extends('layouts.app')

@section('title', 'Inicio - Shineray')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Inicio -->
    <link rel="stylesheet" href="{{ asset('main/css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/carousel.css') }}">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
@endsection

@section('content')

    @include('partials.cotizacion-partial')

    @include('partials.whatsapp')

    <!-- Carousel Principal -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false" data-aos="fade-in">
        <div class="carousel-indicators">
            @foreach($banners as $index => $banner)
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <!--
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ Storage::disk('banners_public')->url($banner->imagen) }}" class="d-block w-100" alt="{{ $banner->titulo }}">
                </div>
            @endforeach
        </div>
        -->
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    @if($banner->link)
                        <a href="{{ $banner->link }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ Storage::disk('banners_public')->url($banner->imagen) }}" class="d-block w-100" alt="{{ $banner->titulo }}">
                        </a>
                    @else
                        <img src="{{ Storage::disk('banners_public')->url($banner->imagen) }}" class="d-block w-100" alt="{{ $banner->titulo }}">
                    @endif
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>


    <!-- Sección vehículos -->
    <div class="container text-center my-2" data-aos="fade-up">
        <h1 class="display-5">Modelos</h1>
        <p class="lead">Mira nuestros modelos</p>
    </div>


    <!-- SECCIÓN VEHÍCULOS con CARRUSEL -->
    <div class="container-fluid my-4">

        <div class="mt-4"></div>

        <!-- Carrusel de Bootstrap -->
        <div id="vehicleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($vehiculos as $index => $vehiculo)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        @if($vehiculo->imagen)
                            <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->imagen) }}"
                                 alt="{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}"
                                 class="d-block w-100 vehicle-image">
                        @else
                            <img src="{{ asset('main/images/placeholder.svg') }}"
                                 alt="Sin imagen"
                                 class="d-block w-100 vehicle-image">
                        @endif

                        <!-- Contenedor de botones debajo de la imagen -->
                        <div class="mt-3 text-center">
                            <a href="#"
                               class="btn-cotizar"
                               data-modelo="{{ $vehiculo->modelo }}"
                               aria-label="Cotizar">
                                Cotizar
                            </a>
                            <a href="{{ route('vehiculo_detalles', $vehiculo->id) }}"
                               class="btn-info"
                               aria-label="Ver catálogo">
                                Más información
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Flecha Izquierda (personalizada) -->
            <button class="carousel-control-prev custom-arrow" type="button"
                    data-bs-target="#vehicleCarousel" data-bs-slide="prev">
                <img src="{{ asset('main/images/elementos/flechaIz.png') }}"
                     alt="Anterior" class="arrow-img">
                <span class="visually-hidden">Anterior</span>
            </button>

            <!-- Flecha Derecha (personalizada) -->
            <button class="carousel-control-next custom-arrow" type="button"
                    data-bs-target="#vehicleCarousel" data-bs-slide="next">
                <img src="{{ asset('main/images/elementos/flechaDe.png') }}"
                     alt="Siguiente" class="arrow-img">
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>





    <!-- Sección Italian Revolution -->
    <section class="italian-revolution">
        <div class="italian-revolution-content">
            <!-- Columna Izquierda: Imagen + Íconos -->
            <div class="italian-left">
                <img src="{{ asset('main/images/elementos/italianrevolution.png') }}"
                     alt="Italian Revolution"
                     class="italian-image">

                <ul class="italian-features">
                    <li>
                        <img src="{{ asset('main/images/elementos/cambio-manual.png') }}" alt="Cambio Manual" class="feature-icon">
                        <strong>Cambio Manual y Automático</strong>
                    </li>
                    <li>
                        <img src="{{ asset('main/images/elementos/motor.png') }}" alt="Motores 1ST" class="feature-icon">
                        <strong>Motores 1.5T</strong>
                    </li>
                    <li>
                        <img src="{{ asset('main/images/elementos/diseno-inteligente.png') }}" alt="Diseño Inteligente" class="feature-icon">
                        <strong>Diseño Inteligente</strong>
                    </li>
                </ul>
            </div>

            <!-- Columna Derecha: Texto + Botón -->
            <div class="italian-right">
                <h3 class="italian-subtitle">
                    NUEVAS INCORPORACIONES A LA GAMA DE TURISMOS Y VEHÍCULOS COMERCIALES
                </h3>
                <p class="italian-desc">
                    Descubre los nuevos vehículos industriales de Shineray. Solicita una prueba de vehículo
                </p>
                <p class="italian-prueba">
                    Solicita una prueba de vehículo
                </p>
                <a href="#" class="btn-shineray">QUIERO PROBAR UN Shineray</a>

                <h4 class="italian-subtitle2">PRUÉBALOS Y SORPRÉNDETE</h4>
                <p class="italian-desc">
                    ¡Con 3 años de garantía! Diseño, inteligencia y alma italiana
                </p>
            </div>
        </div>
    </section>


    <!-- AOS JS y otros scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false
        });
    </script>
    <script defer src="{{ asset('main/js/inicio.js') }}"></script>
@endsection
