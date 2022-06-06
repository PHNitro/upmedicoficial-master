const senha = document.querySelectorAll('.sen')
const equalPassV = document.querySelectorAll('.equalPass')
const formBox = document.querySelector('.formBox')
const toggle_om = document.querySelectorAll('.toggle_om')
const body = document.querySelector('body')
const btnEsq = document.querySelector('.recuperar')

function equalPass() {
    var senhaCampo1 = senha[$y].value
    var senhaCampo2 = equalPassV[$y - 1].value
    if (senhaCampo1 !== senhaCampo2) {
        alert('Senhas não coincidem!')
        $naoClick[$y] = false
        return $naoClick[$y]
    }

}

function pass() {
    if (senha[$n].type == 'password') {
        senha[$n].type = 'text'
        toggle_om[$n].innerHTML = 'Ocultar Senha'
    } else {
        senha[$n].type = 'password'
        toggle_om[$n].innerHTML = 'Mostrar Senha'
    }
}

function clickEsqSenha() {
    formBox.classList.add('hide')
}

function clickEsqSenhaOff() {
    formBox.classList.remove('hide')
}

function cadastrar() {
    formBox.classList.add('active')
    body.classList.add('active')
    formBox.classList.remove('hide')
}

function cadastro() {
    formBox.classList.remove('active')
    body.classList.remove('active')
}





function sair(event) {
    let sair = confirm('Tem certeza que deseja sair?')
    if (sair) {
        return true
    } else {
        return false
    }
}