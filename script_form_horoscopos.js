function mostrarExtras(mostrar) {
    const contenedor = document.getElementById('campos_extra');
    if (mostrar) {
        contenedor.style.display = 'block';
    } else {
        contenedor.style.display = 'none';
        // Opcional: Limpiar los inputs si el usuario marca "No" después de haber escrito algo
        contenedor.querySelectorAll('input').forEach(input => input.value = '');
    }
}