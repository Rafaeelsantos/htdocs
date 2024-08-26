document.getElementById('mostrarMais').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.aviso').classList.toggle('visivel');
    if (document.querySelector('.aviso').classList.contains('visivel')) {
        document.getElementById('mostrarMais').textContent = 'Ocultar texto';
    } else {
        document.getElementById('mostrarMais').textContent = 'Visualizar mais';
    }
});
