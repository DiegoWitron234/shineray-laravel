@extends('layouts.app')

@section('title', 'Detalles del Vehículo')

@section('extra_head')
    <!-- Estilos exclusivos para la página de detalles -->
    <link rel="stylesheet" href="{{ asset('main/css/vehiculo_detalles.css') }}">
@endsection

@section('content')

    @include('partials.cotizacion-partial')

    <div class="container my-5">
        <div class="container py-4">

            <div class="row align-items-center">
                <!-- Columna Izquierda: Imagen de vehículo con fondo verde (catalogo) -->
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

                <!-- Columna Derecha: Imagen con datos (detalles) y botones sobrepuestos -->
                <div class="col-12 col-md-6">
                    <!-- Contenedor de la imagen, con posición relativa -->
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

                        <!-- Contenedor de botones superpuestos -->
                        <div class="buttons-overlay">
                            <a href="#"
                               class="btn-cotizar me-3"
                               data-modelo="{{ $vehiculo->modelo }}">
                                Cotizar
                            </a>
                        </div>
                    </div>
                </div>

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
