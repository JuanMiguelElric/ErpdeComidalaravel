@extends('welcome')
@section('conteudo')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 style="font-size: 4em;">Informações do Usuario</h1>
                <h2 style="font-size:3em">{{$funcionario->nome}}</h2>
                <h2>{{$funcionario->sobrenome}}</h2>

            </div>
            <div class="col-6 mt-5">
                <h3>Dados pessoais</h3>
                <p><strong>CPF:</strong>{{$funcionario->cpf}}</p>
                <p><strong>RG:</strong>{{$funcionario->rg}}</p>
                <p><strong>Email:</strong>{{$funcionario->email}}</p>
                <p><strong>Telefone:</strong>{{$funcionario->telefone1}}</p>
                <p><strong>CEP:</strong>{{$funcionario->cep}}</p>
                <p><strong>Endereço:</strong>{{$funcionario->logradouro}}</p>
                <p><strong>Bairro:</strong>{{$funcionario->bairro}}</p>
                <p><strong>Complemento:</strong>{{$funcionario->complemento}}</p>

            </div>
            <div class="col-6 mt-5">
                <h3>Dados Empresáriais</h3>
                <p><strong>Pis</strong>{{$funcionario->pis}}</p>
                <p><strong>Banco</strong>{{$funcionario->banco}}</p>
                <p><strong>Agencia</strong>{{$funcionario->agencia}}</p>
                <p><strong>conta</strong>{{$funcionario->conta}}</p>
                <p><strong>Cargo</strong>{{$funcionario->cargo}}</p>
                <p><strong>setor</strong>{{$funcionario->setor}}</p>
                <p><strong>Situação</strong>:Ativo</p>
            </div>
        </div>

    </div>
</div>