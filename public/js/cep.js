function checkCep(event) {
    //verifica se o evento existe
    if (event) {
        let cep = event.target.value.replace(/\D/g, '');
        console.log(cep);
        //informando a api
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(res => res.json())
        //enviando formato json
        .then(data=>{
            if(data && !data.erro){
                console.log(data);
                document.getElementById('cep').value = data.cep;
                document.getElementById('cidade').value = data.localidade;
                document.getElementById('endereco').value = data.logradouro;
                document.getElementById('bairro').value = data.bairro;
                document.getElementById('complemento').value = data.complemento;
            }
        });
    }
}
