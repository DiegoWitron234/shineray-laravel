@extends('layouts.app')

@section('title', 'Distribuidores - Shineray')

@section('extra_head')
    <link rel="stylesheet" href="{{ asset('main/css/distribuidores.css') }}">
@endsection

@section('content')
    <!-- Imagen de fondo con título -->
    <div class="hero-section">
        <div class="hero-overlay">
            <h1 class="hero-title">Distribuidores</h1>
        </div>
    </div>

    <!-- Contenedor principal (solo para esta página) -->
    <div class="distribuidores-container">
        <!-- Columna izquierda: Información de Distribuidores -->
        <div class="distribuidor-info">
            <h2 class="title">Distribuidores</h2>
            <p>
                Al ser distribuidor de SHINERAY, formarás parte de una marca líder en la creación de vehículos de alto rendimiento, reconocida por su innovación y calidad a nivel mundial.
            </p>
            <p>
                La inversión inicial se recupera rápidamente en comparación con la competencia, y recibirás capacitación y asesoría permanente para impulsar el crecimiento y desarrollo de tu negocio.
            </p>
            <p>
                Contarás con el respaldo de SHINERAY, que te brinda un sólido soporte en todas las áreas de tu negocio, con personal especializado en <strong>REFACCIONES, SERVICIO POST-VENTA y VENTAS.</strong>
            </p>
        </div>

        <!-- Columna derecha: Cuadro de pestañas -->
        <div class="tab-container">
            <div class="tabs">
                <button class="tab active" data-target="requisitos">Requisitos</button>
                <button class="tab" data-target="moral">Moral</button>
                <button class="tab" data-target="fisico">Físico</button>
            </div>

            <div class="tab-content">
                <div class="tab-panel active" id="requisitos">
                    <ul>
                        <li><span class="highlight">✔</span> Inversión mínima de 5 unidades.</li>
                        <li><span class="highlight">✔</span> Local para exhibición de unidades.</li>
                        <li><span class="highlight">✔</span> Inversión de <span class="price">$180,000.00</span> en refacciones.</li>
                    </ul>
                </div>
                <div class="tab-panel" id="moral">
                    <ul>
                        <li><span class="highlight">✔</span> Acta constitutiva.</li>
                        <li><span class="highlight">✔</span> RFC de la empresa.</li>
                        <li><span class="highlight">✔</span> Identificación oficial del representante legal.</li>
                    </ul>
                </div>
                <div class="tab-panel" id="fisico">
                    <ul>
                        <li><span class="highlight">✔</span> Identificación oficial.</li>
                        <li><span class="highlight">✔</span> Comprobante de domicilio.</li>
                        <li><span class="highlight">✔</span> Registro en el SAT.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('main/js/distribuidores.js') }}"></script>
@endsection


