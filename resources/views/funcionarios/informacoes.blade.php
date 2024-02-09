@extends('welcome')
@section('conteudo')

<div class="container">
    <h2 class="text-center">Aguarde um momento </h2>
    <div class="mt-5 p-5 d-flex justify-content-center">
        <div class="row">
            <div class="col-12">
                <div class="c-loader"></div>

            </div>
            <div class="mt-5 col-12">
                
            <script>
                setTimeout(function(){
                    let mensgem = document.createElement('h2');
                    mensgem.textContent = "Armazenando Dados do funcionário";
                    mensgem.classList.add('text-center');
                    document.body.appendChild(mensgem);
                    setTimeout(function(){
                        mensgem.remove();
                        let mensagem = document.createElement('h2');
                        mensagem.textContent = "Aguarde mais uns instantes";
                        mensagem.classList.add('text-center');
                        document.body.appendChild(mensagem);
                        setTimeout(function(){
                            mensagem.remove();
                            let mensagem1 = document.createElement('h2');
                            mensagem1.textContent = "Dados Salvos com sucesso";
                            mensagem1.classList.add('text-center');
                            document.body.appendChild(mensagem1);
                            window.location.href = "/listagemdosfuncionarios";
    
    
                        },1000)
                    },1000)
                },2000)
            </script>

            </div>
        </div>
        
            <br>
        
    </div>
</div>