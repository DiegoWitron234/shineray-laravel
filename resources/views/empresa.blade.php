@extends('layouts.app')

@section('title', 'Empresa - Shineray')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Empresa -->
    <link rel="stylesheet" href="{{ asset('main/css/empresa.css') }}">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
@endsection

@section('content')

    @include('partials.whatsapp')

    <!-- Imagen Encabezado -->
    <section class="single-page-header">
        <img src="{{ asset('main/images/headers/header.jpg') }}" alt="Historia de la Empresa" class="img-fluid w-100">
    </section>

    <!-- Texto debajo de la imagen -->
    <section class="empresa-texto py-5">
        <div class="container text-center" data-aos="fade-in">
            <h1 class="display-4">Empresa</h1>
            <p class="lead">Conoce nuestra historia, misión, visión y valores como empresa.</p>
        </div>
    </section>

    <!-- Historia -->
    <section class="section" id="historia">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="text-primary mb-4">Acerca de Shineray</h2>
                    <div id="historia-contenedor" class="historia-contenedor">
                        <p>
                            <strong>Shineray</strong> es una marca que se destaca por su innovación y compromiso con la calidad en el diseño y fabricación de vehículos y soluciones de movilidad. Con un enfoque en ofrecer productos de alto rendimiento, Shineray ha logrado consolidar una imagen internacional, proporcionando motocicletas y soluciones de transporte que combinan tecnología avanzada con una estética moderna. La marca se orienta hacia el desarrollo de productos versátiles y eficientes, pensados para satisfacer las necesidades del usuario contemporáneo.
                        </p>
                    </div>
                    <!-- Botón para "Leer más", en caso de que lo necesites -->
                    <button id="btn-leer-mas" class="btn btn-primary">Leer más</button>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="{{ asset('main/images/elementos/camioneta.jpeg') }}" alt="Historia de la empresa" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Quiénes Somos -->
    <section class="section" id="quienes-somos" data-aos="fade-up">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <img src="{{ asset('main/images/fondos/fondohistoria.jpg') }}" alt="Historia de Shineray" style="width: 100%; height: auto;">
                    <h2 class="text-primary mb-4">Quiénes somos</h2>
                    <p>
                        Moto Galería es una empresa fundada el 11 de Agosto de 2006 por un grupo familiar de Chiapas dedicada a la comercialización de moto carros. En el año 2019 se crean lazos con la marca Piaggio y a raíz de esta unión Moto Galería se convierte en importadora y exportadora de moto carros de pasajeros, pick ups y refacciones. Desde entonces, Moto Galería en conjunto con Piaggio se ha expandido a lugares como Colombia, Guatemala, Perú y Estados Unidos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión y Visión -->
    <section class="section bg-light" id="mision" data-aos="fade-up">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-primary">Misión</h2>
                    <p class="lead">
                        "Ofrecer soluciones de movilidad accesibles , eficientes y ostenubles que respeten las culturas locales
                        y optimicen el transporte de personas y bienes, contribuyendo activamente al desarrollo economico y oscial de las
                        comunidades."
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary">Visión</h2>
                    <p class="lead">
                        "Ser la marca lider en moto carros en México, lida participación de
                        mercado y presencia en Latinoamérica"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="section" id="valores" data-aos="fade-up">
        <div class="container py-5">
            <h2 class="text-center text-primary mb-5">Nuestros Valores</h2>
            <div class="row">
                <div class="col-md-4 text-center" data-aos="zoom-in">
                    <img src="{{ asset('main/images/valores/compromiso.png') }}" alt="Compromiso" class="img-fluid mb-2 ">
                    <h4>Compromiso</h4>
                    <p>Estamos seguros de que nuestras colaboraciones se basan en la responsabilidad mutua.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('main/images/valores/honestidad.png') }}" alt="Honestidad" class="img-fluid mb-2 ">
                    <h4>Honestidad</h4>
                    <p>Fomentamos la armonía y confianza con nuestras prácticas comerciales.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('main/images/valores/pasion.png') }}" alt="Pasión" class="img-fluid mb-2 ">
                    <h4>Pasión</h4>
                    <p>Nos dedicamos a mejorar la calidad de vida de las personas con nuestra oferta.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('main/images/valores/solidaridad.png') }}" alt="Solidaridad" class="img-fluid mb-2 ">
                    <h4>Solidaridad</h4>
                    <p>Un sentimiento de apoyo especialmente cuando haya una situación de vulnerabilidad.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('main/images/valores/competitividad.png') }}" alt="Competitividad" class="img-fluid mb-2 ">
                    <h4>Competitividad</h4>
                    <p>Siempre buscamos estar a la vanguardia, ofreciendo los mejores estándares de calidad.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('main/images/valores/competitividad.png') }}" alt="Competitividad" class="img-fluid mb-2 ">
                    <h4>Orientación</h4>
                    <p>Reconocemos que los clientes, compañeros de
                        trabajo, proveedores y accionistas son el motor del negocio, por lo tanto,
                        damos prioridad a sus necesidades y expectativas para mejorar su
                        satisfacción y decisión de quedarse con nosotros.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Script exclusivo para la página Empresa -->
    <script src="{{ asset('main/js/empresa.js') }}"></script>
@endsection
