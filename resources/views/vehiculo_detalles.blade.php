@extends('layouts.app')

@section('title', 'Detalles del Vehículo')

@section('extra_head')
    <!-- Estilos exclusivos para la página de detalles -->
    <link rel="stylesheet" href="{{ asset('main/css/vehiculo_detalles.css') }}">
@endsection

@section('content')
    <div class="container my-5">
        <div class="card mb-5 shadow-sm" data-aos="fade-up">
            <!-- Encabezado: Tipo y Modelo -->
            <div class="card-header text-center bg-secondary text-white">
                <h2 class="mb-0">{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}</h2>
            </div>
            <div class="card-body">
                <!-- Fila de datos técnicos -->
                <section class="py-3 border-bottom" data-aos="fade-right">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h5 class="fw-bold">Capacidad de carga</h5>
                            <p>{{ $vehiculo->carga }} Kg</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="fw-bold">Motor</h5>
                            <p>{{ $vehiculo->motor }} L</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="fw-bold">Rendimiento mixto</h5>
                            <p>{{ $vehiculo->rendimiento }} km/lt</p>
                        </div>
                    </div>
                </section>
                <!-- Detalle: Imagen y Descripción -->
                <section class="py-3" data-aos="fade-left">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            @if($vehiculo->imagen)
                                <img src="{{ Storage::disk('vehiculos_public')->url($vehiculo->imagen) }}"
                                     alt="{{ $vehiculo->tipo }} {{ $vehiculo->modelo }}"
                                     class="img-fluid rounded hover-lift">
                            @else
                                <img src="{{ asset('main/images/placeholder.svg') }}"
                                     alt="Sin imagen"
                                     class="img-fluid rounded hover-lift">
                            @endif
                        </div>
                        <div class="col-md-7">
                            <h4 class="mb-3">Descripción</h4>
                            <p>{{ $vehiculo->descripcion }}</p>
                            <h4 class="mb-3">Precio</h4>
                            <h5>{{ '$' . number_format($vehiculo->precio, 0, '.', ',') }} MXN</h5>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('vehiculos') }}" class="btn btn-primary">
                &laquo; Volver atrás
            </a>
        </div>
    </div>

    <!-- Sección con las imágenes de "detalles_imagenes" a ancho completo -->
    @php
        $imagenes = collect($vehiculo->detalles_imagenes)->reverse()->all();
    @endphp

    <div class="container-fluid px-0">
        @if($imagenes && count($imagenes))
            @foreach($imagenes as $detalle)
                <img src="{{ Storage::disk('vehiculos_public')->url($detalle) }}" class="img-fluid w-100" alt="Detalle del vehículo">
            @endforeach
        @else
            <p class="text-center">No se encontraron imágenes adicionales.</p>
        @endif
    </div>



@endsection
