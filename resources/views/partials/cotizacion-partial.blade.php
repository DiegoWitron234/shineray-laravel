<!-- resources/views/partials/cotizacion-partial.blade.php -->

<div class="modal" id="modalCotizacion">
    <div class="modal-overlay" id="cerrarOverlay"></div>

    <div class="modal-content">
        <button type="button" class="modal-close" id="cerrarModal">&times;</button>

        <h2 class="modal-title">Cotízalo</h2>
        <p class="modal-subtitle">
            Completa el formulario y recibirás información de precios e incentivos del vehículo que deseas.
        </p>

        <form id="formCotizacion" method="POST" action="{{ route('cotizacion.enviar') }}">
            @csrf

            <!-- Campo oculto para el modelo del vehículo -->
            <input type="hidden" name="modelo_vehiculo" id="modelo_vehiculo" value="">

            <div class="form-group">
                <label for="estado">Estado <span class="required">*</span></label>
                <select name="estado" id="estado" required>
                    <option value="" disabled selected>Selecciona</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Ciudad de México">Ciudad de México</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Durango">Durango</option>
                    <option value="Estado de México">Estado de México</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                </select>
            </div>

            <div class="form-group">
                <label for="codigo_postal">Código Postal <span class="required">*</span></label>
                <input type="text" id="codigo_postal" name="codigo_postal" required>
            </div>

            <div class="form-group">
                <label for="nombre_completo">Nombre completo <span class="required">*</span></label>
                <input type="text" id="nombre_completo" name="nombre_completo" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico <span class="required">*</span></label>
                <input type="email" id="correo" name="correo" required>
            </div>

            <div class="form-group">
                <label for="telefono">Número de teléfono <span class="required">*</span></label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="form-group checkbox-group">
                <input type="checkbox" id="aviso_privacidad" name="aviso_privacidad" required>
                <label for="aviso_privacidad">
                    He leído y acepto el
                    <a href="#" target="_blank">aviso de privacidad</a>
                </label>
            </div>

            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
</div>

<!-- Estilos (mueve a tu CSS si gustas) -->
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow-y: auto; /* Permite scroll si el contenido es mayor que la pantalla */
    }
    /* Cambiamos la posición a fixed para que el overlay se mantenga en todo momento */
    .modal-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        left: 0;
        top: 0;
    }
    .modal-content {
        position: relative;
        background-color: #fff;
        width: 90%;
        max-width: 500px;
        margin: 60px auto;
        border-radius: 8px;
        padding: 30px 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    .modal-close {
        background: none;
        border: none;
        font-size: 28px;
        color: #666;
        cursor: pointer;
        position: absolute;
        top: 15px;
        right: 20px;
    }
    .modal-title {
        margin-top: 0;
        margin-bottom: 8px;
        font-size: 24px;
        font-weight: 600;
    }
    .modal-subtitle {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 16px;
        display: flex;
        flex-direction: column;
    }
    .form-group label {
        font-weight: 500;
        margin-bottom: 4px;
    }
    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group select {
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group select {
        height: 40px;
    }
    .checkbox-group {
        flex-direction: row;
        align-items: center;
    }
    .checkbox-group input[type="checkbox"] {
        margin-right: 8px;
        width: auto;
    }
    .checkbox-group label {
        margin-bottom: 0;
    }
    .required {
        color: red;
    }
    .btn-enviar {
        background-color: #0072CE;
        color: #fff;
        border: none;
        padding: 10px 18px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }
    .btn-enviar:hover {
        background-color: #005FAF;
    }
</style>

<!-- Script para abrir/cerrar modal y capturar modelo -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('modalCotizacion');
        const overlay = document.getElementById('cerrarOverlay');
        const closeBtn = document.getElementById('cerrarModal');
        const inputModelo = document.getElementById('modelo_vehiculo');

        // Selecciona TODOS los botones "Cotizar" (puede haber varios)
        const botonesCotizar = document.querySelectorAll('.btn-cotizar');

        // Para cada botón, al hacer clic, abrimos el modal y pasamos el modelo
        botonesCotizar.forEach(boton => {
            boton.addEventListener('click', (e) => {
                e.preventDefault();
                // Tomar el "data-modelo" del botón
                const modelo = boton.dataset.modelo;
                // Asignarlo al hidden input
                inputModelo.value = modelo || '';

                // Mostrar el modal
                modal.style.display = 'block';
            });
        });

        // Cerrar modal al hacer clic en la X
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Cerrar modal al hacer clic en el overlay
        overlay.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    });
</script>
