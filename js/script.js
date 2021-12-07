const primeiraNota = document.getElementById('primeira');
const segundaNota = document.getElementById('segunda');
const media = document.getElementById('media');
const situacao = document.getElementById('situacao');
function calculaMedia () {
    let notaMedia = (primeiraNota.value + segundaNota.value) / 2;
    media.setAttribute('value', notaMedia);

    if (notaMedia >= 7) {
        situacao.setAttribute('value', 'Aprovado')
    } else {
        situacao.setAttribute('value', 'Reprovado');
    }
}
primeiraNota.addEventListener('change', calculaMedia());
segundaNota.addEventListener('change', calculaMedia());