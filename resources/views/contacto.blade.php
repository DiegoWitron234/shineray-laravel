@extends('layouts.app')

@section('title', 'Contacto - Shineray')

@section('extra_head')
    <link rel="stylesheet" href="{{ asset('main/css/contacto.css') }}">
@endsection

@section('content')
    <div class="contact-page">
        <div class="contact-container">
            <!-- Columna izquierda: Información de contacto -->
            <div class="contact-info">
                <h1>Contacto</h1>
                <p>Si tiene alguna pregunta y solicitud de cotización, no dude en ponerse en contacto con nosotros.</p>
                <div class="contact-details">
                    <p>
                        <strong>Dirección:</strong>
                        <a href="https://maps.app.goo.gl/HDsaQGTfw4yMX13c6"
                           target="_blank"
                           rel="noopener">
                            1737 Parque Pl. Ambar Pte. Col. Xamaipak, 29060 Tuxtla Gutiérrez, Chiapas, México.
                        </a>
                    </p>
                    <p><strong>Teléfono:</strong> <a href="tel:+529932787360">+52 993 278 7360</a></p>
                    <p><strong>Email:</strong> <a href="mailto:ventas@shineraymotogaleria.com">ventas@shineraymotogaleria.com</a></p>
                    <p><strong>Horarios de Atención:</strong> Lunes a Viernes de 9:00 AM a 6:00 PM<br>
                        Sábados de 9:00 AM a 2:00 PM
                    </p>
                </div>
                <div class="contact-socials">
                    <p>MANTENERSE EN CONTACTO</p>
                    <div class="social-icons">
                        <a href="#" class="contact-networks-icon">
                            <img src="{{ asset('main/images/redes-sociales/iconos-blanco/FBW.png') }}" alt="Facebook">
                        </a>
                        <a href="#" class="contact-networks-icon">
                            <img src="{{ asset('main/images/redes-sociales/iconos-blanco/INW.png') }}" alt="Instagram">
                        </a>
                        <a href="#" class="contact-networks-icon">
                            <img src="{{ asset('main/images/redes-sociales/iconos-blanco/YTW.png') }}" alt="YouTube">
                        </a>
                        <a href="#" class="contact-networks-icon">
                            <img src="{{ asset('main/images/redes-sociales/iconos-blanco/TTKW.png') }}" alt="TikTok">
                        </a>
                        <a href="https://wa.me/529932787360?text=Hola,%20deseo%20informaci%C3%B3n." class="contact-networks-icon">
                            <img src="{{ asset('main/images/redes-sociales/iconos-blanco/WAW.png') }}" alt="TikTok">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Columna derecha: Formulario de contacto -->
            <div class="contact-form">
                <form action="{{ route('contacto.send') }}" method="POST">
                    @csrf
                    <label for="nombre">Nombre <span>*</span></label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required>

                    <label for="correo">Correo Electrónico <span>*</span></label>
                    <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com" required>

                    <label for="mensaje">Mensaje <span>*</span></label>
                    <textarea id="mensaje" name="mensaje" rows="5" placeholder="Su mensaje está aquí..." required></textarea>

                    <button type="submit" class="contact-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Mensajes flash (éxito o error) -->
    <div class="container mt-3">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if(session('message'))
            <div class="container mt-3">
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            </div>
        @endif
    </div>
@endsection
