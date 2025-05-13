<?php
if (!function_exists('tmpfile')) {
    /**
     * Emula tmpfile() usando tempnam() y fopen()
     */
    function tmpfile() {
        // Crea un archivo temporal en el directorio de sistema
        $tempPath = tempnam(sys_get_temp_dir(), 'livewire_');
        if ($tempPath === false) {
            throw new \RuntimeException("No se pudo crear un archivo temporal.");
        }
        // Abre el archivo en modo de lectura y escritura
        $handle = fopen($tempPath, 'w+');
        if ($handle === false) {
            throw new \RuntimeException("No se pudo abrir el archivo temporal.");
        }
        // Desactiva el buffer de escritura para que se actualice de inmediato el tamaño
        //stream_set_write_buffer($handle, 0);
        // Registra una función para eliminar el archivo cuando se cierre el script
        register_shutdown_function(function() use ($tempPath) {
            if (file_exists($tempPath)) {
                unlink($tempPath);
            }
        });
        return $handle;
    }
}
