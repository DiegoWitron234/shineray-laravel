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

    <!-- Carousel Principal -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false" data-aos="fade-in">
        <div class="carousel-indicators">
            @foreach($banners as $index => $banner)
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ Storage::disk('banners_public')->url($banner->imagen) }}" class="d-block w-100" alt="{{ $banner->titulo }}">
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
    <div class="container-fluid my-4">
        <!-- Fila de Tabs -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center" id="modelTabs" role="tablist">
                    @foreach($vehiculos as $index => $vehiculo)
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link {{ $loop->first ? 'active' : '' }}"
                                id="tab-{{ $vehiculo->id }}"
                                data-bs-toggle="tab"
                                data-bs-target="#content-{{ $vehiculo->id }}"
                                type="button" role="tab"
                                aria-controls="content-{{ $vehiculo->id }}"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                {{ $vehiculo->modelo }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-4"></div>

        <!-- Fila donde irá la imagen y las flechas -->
        <div class="row justify-content-center">
            <!-- Contenedor con position: relative para superponer flechas -->
            <div class="col-12 position-relative text-center">

                <!-- Contenido de Tabs (imagen y botones) -->
                <div class="tab-content" id="modelTabsContent">
                    @foreach($vehiculos as $index => $vehiculo)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                             id="content-{{ $vehiculo->id }}"
                             role="tabpanel"
                             aria-labelledby="tab-{{ $vehiculo->id }}">

                            @if($vehiculo->imagen)
                                <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->imagen) }}"
                                     alt="{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}"
                                     class="img-fluid vehicle-image mx-auto d-block">
                            @else
                                <img src="{{ asset('main/images/placeholder.svg') }}"
                                     alt="Sin imagen"
                                     class="img-fluid vehicle-image mx-auto d-block">
                            @endif

                            <div class="d-flex justify-content-center mt-3">
                                <a href="#" class="btn-cotizar" aria-label="Cotizar"></a>
                                <a href="#" class="btn-info" aria-label="Más información"></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Flecha Izquierda -->
                <button type="button" class="arrow-button left-arrow" id="prevTab">
                    <img src="{{ asset('main/images/flechaIz.png') }}"
                         alt="Anterior" class="arrow-img">
                </button>

                <!-- Flecha Derecha -->
                <button type="button" class="arrow-button right-arrow" id="nextTab">
                    <img src="{{ asset('main/images/flechaDe.png') }}"
                         alt="Siguiente" class="arrow-img">
                </button>

            </div>
        </div>
    </div>






    <!-- Sección Italian Revolution -->
    <section class="italian-revolution">
        <div class="italian-revolution-content">
            <!-- Columna Izquierda: Imagen + Íconos -->
            <div class="italian-left">
                <img src="{{ asset('main/images/italianrevolution.png') }}"
                     alt="Italian Revolution"
                     class="italian-image">

                <ul class="italian-features">
                    <li>
                        <img src="{{ asset('main/images/cambio-manual.png') }}" alt="Cambio Manual" class="feature-icon">
                        <strong>Cambio Manual y Automático</strong>
                    </li>
                    <li>
                        <img src="{{ asset('main/images/motor.png') }}" alt="Motores 1ST" class="feature-icon">
                        <strong>Motores 1.5T</strong>
                    </li>
                    <li>
                        <img src="{{ asset('main/images/diseno-inteligente.png') }}" alt="Diseño Inteligente" class="feature-icon">
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
                <a href="#" class="btn-shineray">QUIERO PROBAR UN Shineray</a>

                <h4 class="italian-subtitle2">PRUÉBALOS Y SORPRÉNDETE</h4>
                <p class="italian-desc">
                    ¡Con 5 y 8 años de garantía! Diseño, inteligencia y alma italiana
                </p>
            </div>
        </div>
    </section>

    <section class="div-flotante">
        <a href="https://wa.me/529932787360?text=Hola, deseo información." target="_blank" class="icono-flotante">
            <img src="{{ asset('main/images/whatsapp.png') }}" loading="lazy" alt="WhatsApp" class="icono-flotante-img">
        </a>
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
