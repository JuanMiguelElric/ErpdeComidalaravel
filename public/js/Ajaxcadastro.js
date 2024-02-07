console.log("olá, eu sou utilizado para requisições AJAX");

$(document).ready(function(){
    // Quando o usuário clicar em cadastrar, serão realizadas as etapas a seguir
    $('#enviar').click(function(){
        var dados = $('#cadCardapio').serialize(); // Corrigi o seletor para '#cadCardapio' e a função para 'serialize()'
        $.ajax({
            type: 'POST', // Alterei para POST, pois geralmente os formulários de cadastro enviam dados via POST
            dataType: 'json',
            url: '/refeicaofoicadastradacomsucesso', // Corrigi a chave 'URL' para 'url'
            async: true,
            data: dados,
            success: function(response){
                location.reload(); // Recarrega a página após o sucesso da requisição
            }
        });
        return false; // Impede o envio do formulário padrão
    });
});
