<header class="bg-light border-bottom fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('main/images/logoshineray.png') }}" alt="Logo Shineray" style="height:50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('empresa') ? 'active' : '' }}" href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('vehiculos') ? 'active' : '' }}" href="{{ route('vehiculos') }}">Vehículos</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ request()->routeIs('distribuidores') ? 'active' : '' }}" href="{{ route('distribuidores') }}">Distribuidores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
