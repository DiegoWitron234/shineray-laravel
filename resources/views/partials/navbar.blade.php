<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">Mi Proyecto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vehiculos') }}">Vehículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
