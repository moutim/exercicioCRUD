const primeiraNota = document.getElementById('primeira');
const segundaNota = document.getElementById('segunda');
const media = document.getElementById('media');
const situacao = document.getElementById('situacao');
const botao = document.getElementById('cadastrar');
function calculaMedia (event) {
    event.preventDefault();
    let notaMedia = (primeiraNota.value + segundaNota.value) / 2;
    media.setAttribute('value', notaMedia);

    if (notaMedia >= 7) {
        situacao.setAttribute('value', 'Aprovado')
    } else {
        situacao.setAttribute('value', 'Reprovado');
    }
}
botao.addEventListener('click', calculaMedia)
