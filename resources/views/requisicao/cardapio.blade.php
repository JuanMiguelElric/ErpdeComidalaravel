@extends('welcome')
@section('conteudo')

<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrado com sucesso</h1>
        </div>
        <div class="col-12 justify-content-center text-center">
            <svg xmlns="http://www.w3.org/2000/svg" x="100px" y="100px" width="200" height="200" viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20" fill="#4dd0e1"></circle>
                <path fill="#fff" d="M22.491,30.69c-0.576,0-1.152-0.22-1.591-0.659l-6.083-6.084c-0.879-0.878-0.879-2.303,0-3.182 c0.878-0.879,2.304-0.879,3.182,0l6.083,6.084c0.879,0.878,0.879,2.303,0,3.182C23.643,30.47,23.067,30.69,22.491,30.69z"></path>
                <path fill="#fff" d="M22.491,30.69c-0.576,0-1.152-0.22-1.591-0.659c-0.879-0.878-0.879-2.303,0-3.182l9.539-9.539 c0.878-0.879,2.304-0.879,3.182,0c0.879,0.878,0.879,2.303,0,3.182l-9.539,9.539C23.643,30.47,23.067,30.69,22.491,30.69z"></path>
            </svg>
            <br>
            <p id="Dados"></p>
        </div>
        <script>
            setTimeout(function(){
                let mensagem = document.createElement('h1');
                mensagem.textContent = "RecebendoDados";
                mensagem.classList.add('text-center');
                document.body.appendChild(mensagem);
                console.log('aaaaaa')

                setTimeout(function(){
                    mensagem.remove()
                    let mensagem2 = document.createElement('h1');
                    mensagem2.textContent = "Dados Recebidos";
                    mensagem2.classList.add('text-center');
                    document.body.appendChild(mensagem2);
                    window.location.href = "/cardapioAlimenticio"
                }, 2000);
            }, 1000);
        </script>
    </div>
    <br>
</div>

@stop
