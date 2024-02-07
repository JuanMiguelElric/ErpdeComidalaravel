@extends('welcome')
@section('conteudo')

<div class="container">
    <h1>Funcionários</h1>
    <div class="row">
        <div class="col-12 m-5 align-itens-center">
            <div class="input-group">
                <div>
                    <input type="text" class="pesquisar form-control" style="width: 700px;">

                </div>
                <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                    Pesquisar
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>

            </div>
        </div>
        <div class="col-12 m-5 pl-5">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                </svg>
                <p>filtro</p>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <td><strong>Nome</strong></td>
            <td><strong>Sobrenome</strong></td>
            <td><strong>cargo</strong></td>
            <td><strong>informações</strong></td>
            <td><strong>email</strong></td>
            <td><strong>setor</strong></td>
        </tr>
        @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{$funcionario->nome}}</td>
                <td>{{$funcionario->sobrenome}}</td>
                <td>{{$funcionario->cargo}}</td>
                <td><a href="#">informações</a></td>
                <td>{{$funcionario->email}}</td>
                <td>{{$funcionario->setor}}</td>
            </tr>
        @endforeach
    </table>
</div>