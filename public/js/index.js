console.log("arquivo");

// A variável mensagem deve ser atribuída a um elemento, não a uma NodeList
let mensagem = document.querySelector("#mensagemspan");

function nomeAlimento() {
    let nome = document.querySelector("#nome").value;

    // Verificando se o campo está vazio
    if (nome.length <= 1 || nome.length === '') {
        // Alterando a cor da mensagem para vermelho
        mensagem.style.color = "red";
        mensagem.textContent = 'Erro: O campo não pode estar vazio.';
        alert('Erro: O campo não pode estar vazio.');
    } else if (!isNaN(nome)) { // Verificando se o campo é um número
        alert('Erro: O nome não pode ser um número.');
    } else if (nome.length >= 60) { // Verificando se o nome é muito extenso
        alert('Erro: Nome muito extenso.');
    }else{
        mensagem.style.color = "green";
        mensagem.textContent = "Campo preenchido corretamente "
    }

    console.log('nome');
}

function Ingredientes() {
    let ingredientes = document.querySelector('#ingredientes').value;

    // Verificando se o campo está vazio
    if (ingredientes.length === 0) {
        alert('Erro: O campo não pode estar vazio.');
    } else if (ingredientes.length > 300) { // Verificando se a descrição ultrapassa o limite
        alert('Erro: A descrição ultrapassou o limite de caracteres.');
    }

    console.log('ingredientes');
}
