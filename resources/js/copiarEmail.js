
const copiarTexto = document.querySelector('.copiar');
if(copiarTexto) {
    copiarTexto.addEventListener('click', function() {
        const input = document.querySelector('#emailCopiar');
        const texto = input.value
        navigator.clipboard.writeText(texto)
        copiarTexto.classList.add('activo');
        setTimeout(() => {
            copiarTexto.classList.remove('activo');
        }, 1000);
    })
}