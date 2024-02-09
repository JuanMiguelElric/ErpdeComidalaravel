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
                <div ><h2 id="resposta"></h2></div>

            </div>
        </div>
        
            <br>
            <script>
                function Validando(){
                    console.log('Validando dados');
                    let resposta = document.getElementById("resposta");
                    resposta.textContent = "Dados sendo Processado";
                    resposta.textContent = "Dados cadastrados com sucesso"
                }
                setTimeout(Validando,5000);
            </script>
        
    </div>
</div>