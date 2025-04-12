@extends('layouts.app')

@section('title', 'Detalles del Vehículo')

@section('extra_head')
    <!-- Estilos exclusivos para la página de detalles -->
    <link rel="stylesheet" href="{{ asset('main/css/vehiculo_detalles.css') }}">
@endsection

@section('content')

    @include('partials.cotizacion-partial')

    <div class="text-center">
        <a href="{{ route('vehiculos') }}" class="btn btn-primary btn-back">
            &laquo; Volver atrás
        </a>
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
