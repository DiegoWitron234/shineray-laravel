    document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modalEmpresa');
    const overlay = document.getElementById('overlayEmpresa');
    const btnAbrir = document.getElementById('btn-leer-mas');
    const btnCerrar = document.getElementById('cerrarEmpresa');

    btnAbrir.addEventListener('click', e => {
    e.preventDefault();
    modal.style.display = 'block';
});
    btnCerrar.addEventListener('click', () => modal.style.display = 'none');
    overlay.addEventListener('click', () => modal.style.display = 'none');
});
