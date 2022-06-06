const formBox = document.querySelector('.formBox')
const toggle_om = document.querySelectorAll('.toggle_om')
const body = document.querySelector('body')

function cadastrar() {
    formBox.classList.add('active')
    body.classList.add('active')
    formBox.classList.remove('hide')
}

function cadastro() {
    formBox.classList.remove('active')
    body.classList.remove('active')
}

function clickEsqSenha() {
    formBox.classList.add('hide')
}

function clickEsqSenhaOff() {
    formBox.classList.remove('hide')
}   