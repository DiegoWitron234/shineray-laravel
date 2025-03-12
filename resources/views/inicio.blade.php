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


    <!-- Sección de Modelos Populares -->
    <div class="container text-center my-2" data-aos="fade-up">
        <h1 class="display-5">Modelos populares</h1>
        <p class="lead">Mira nuestros modelos más populares entre nuestros clientes</p>
    </div>
    <div class="container marketing mt-5" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset('main/images/X30.png') }}" class="img-fluid hover-lift img-small" alt="Shineray X30">
                <h2 class="fw-normal mt-3">Shineray X30</h2>
                <p>El Nuevo Shineray X30 ahora viene a convertirse en el campeón de la pega con su nuevo diseño y mayor capacidad de carga.</p>
                <p><a class="btn btn-secondary" href="{{ route('vehiculos') }}">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset('main/images/T30.png') }}" class="img-fluid hover-lift img-small" alt="Shineray T30">
                <h2 class="fw-normal mt-3">Shineray T30</h2>
                <p>Shineray T30 con la suavidad de manejo y características que lo hacen preferido por los clientes, gracias a su amplio espacio para pasajeros.</p>
                <p><a class="btn btn-secondary" href="{{ route('vehiculos') }}">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset('main/images/T50.png') }}" class="img-fluid hover-lift img-small" alt="Shineray T30">
                <h2 class="fw-normal mt-3">Shineray T50</h2>
                <p>La Shineray T50 redefine la versatilidad en el segmento de camionetas, combinando un motor de alto rendimiento con un diseño robusto y moderno.</p>
                <p><a class="btn btn-secondary" href="{{ route('vehiculos') }}">Ver detalles &raquo;</a></p>
            </div>
        </div>
    </div>

    <!-- Sección de Opiniones -->
    <div class="container text-center my-5" data-aos="fade-up">
        <h1 class="display-5">Opiniones</h1>
        <p class="lead">Conoce las opiniones de nuestros clientes satisfechos</p>
    </div>
    <hr class="featurette-divider" data-aos="fade-up">
    <div class="container" data-aos="fade-up">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">“Shineray cambió mi forma de movilizarme.” <span class="text-body-secondary">- Juan Pérez</span></h2>
                <p class="lead">"Desde que adquirí mi Shineray X30, mi negocio ha mejorado notablemente. Es económico, confiable y el servicio es insuperable. ¡Totalmente recomendado!"</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('main/images/persona1.jpg') }}" class="img-fluid rounded hover-lift" alt="Shineray X30">
            </div>
        </div>
        <hr class="featurette-divider" data-aos="fade-up">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">“El Shineray T30 es mi mejor inversión.” <span class="text-body-secondary">- María López</span></h2>
                <p class="lead">"La eficiencia y comodidad del Shineray T30 me han permitido ofrecer un servicio de calidad a mis clientes. Es un vehículo innovador y seguro."</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('main/images/persona2.jpg') }}" class="img-fluid rounded hover-lift" alt="Shineray X2">
            </div>
        </div>
        <hr class="featurette-divider" data-aos="fade-up">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">“Shineray T50 es ideal para mi negocio.” <span class="text-body-secondary">- Carlos García</span></h2>
                <p class="lead">"Utilizo mi Shineray T50 para el transporte de carga y ha sido excepcional. Su robustez y eficiencia han superado todas mis expectativas."</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('main/images/persona3.jpg') }}" class="img-fluid rounded hover-lift" alt="Shineray T50">
            </div>
        </div>
        <hr class="featurette-divider" data-aos="fade-up">
    </div>

    <!-- Sección Italian Revolution -->
    <section class="italian-revolution">
        <div class="italian-revolution-content">
            <!-- Columna Izquierda: Íconos y Títulos -->
            <div class="italian-left">
                <h2 class="italian-title">
                    <span class="italian-highlight">ITALIAN</span> Revolution
                </h2>
                <h3 class="italian-subtitle">
                    NUEVAS INCORPORACIONES A LA GAMA DE TURISMOS Y VEHÍCULOS COMERCIALES
                </h3>

                <!-- Lista con íconos al lado del texto (más grandes) -->
                <ul class="italian-features">
                    <li>
                        <img src="{{ asset('main/images/cambio-manual.png') }}" alt="Cambio Manual" class="feature-icon">
                        <strong>Cambio Manual y Automático</strong>
                    </li>
                    <li>
                        <img src="{{ asset('main/images/motor.png') }}" alt="Motores 1ST" class="feature-icon">
                        <strong>Motores 1ST</strong>
                    </li>
                    <li>
                        <img src="{{ asset('main/images/diseno-inteligente.png') }}" alt="Diseño Inteligente" class="feature-icon">
                        <strong>Diseño Inteligente</strong>
                    </li>
                </ul>
            </div>

            <!-- Columna Derecha: Textos y Botón -->
            <div class="italian-right">
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


    <!-- AOS JS y otros scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false
        });
    </script>
    <script defer src="{{ asset('main/js/script.js') }}"></script>
@endsection
