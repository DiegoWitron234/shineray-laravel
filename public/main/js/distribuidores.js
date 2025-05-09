document.addEventListener('DOMContentLoaded', () => {
    // 1. Inicializar el mapa centrado en México
    const map = L.map('map').setView([23.6345, -102.5528], 5);

    // 2. Cargar teselas de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    }).addTo(map);

    // 3. Pedir el JSON de sucursales y crear marcadores
    fetch('/api/sucursales')
        .then(res => res.json())
        .then(sucursales => {
            sucursales.forEach(s => {
                const marker = L.marker([s.latitud, s.longitud]).addTo(map);
                marker.bindPopup(`
                    <strong>${s.nombre}</strong><br>
                    ${s.direccion ? s.direccion + '<br>' : ''}
                    C.P.: ${s.codigo_postal ? s.codigo_postal + '<br>' : ''}
                    ${s.correo    ? '✉ ' + s.correo + '<br>'    : ''}
                    ${s.telefono  ? '📞 ' + s.telefono             : ''}
                `);
            });
        })
        .catch(err => console.error('Error cargando sucursales:', err));
});
