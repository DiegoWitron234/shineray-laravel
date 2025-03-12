document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab");
    const panels = document.querySelectorAll(".tab-panel");

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {
            // Remover clase 'active' de todas las pestañas
            tabs.forEach(t => t.classList.remove("active"));
            // Agregar clase 'active' a la pestaña clicada
            this.classList.add("active");

            // Ocultar todos los paneles de contenido
            panels.forEach(panel => panel.classList.remove("active"));

            // Mostrar el panel correspondiente al botón clicado
            const targetPanel = document.getElementById(this.getAttribute("data-target"));
            if(targetPanel) {
                targetPanel.classList.add("active");
            }
        });
    });
});
