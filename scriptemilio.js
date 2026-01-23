//Por qué lo comentado no funciona?

const areaTexto = document.getElementById('tweet1')
const barra = document.getElementById('barraCaracteres')
//const longActual = areaTexto.value.length;

areaTexto.addEventListener('input', () => {
    //longActual = areaTexto.value.length;
    const longActual = areaTexto.value.length;

    barra.value = longActual;
})