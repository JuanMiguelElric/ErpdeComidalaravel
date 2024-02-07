@extends('welcome')
@section('conteudo')

<div class="container">
    <h1>Funcionários</h1>
    <table>
        <tr>
            <td><strong>Nome</strong></td>
            <td><strong>Sobrenome</strong></td>
            <td><strong>cargo</strong></td>
            <td><strong>informações</strong></td>
            <td><strong>email</strong></td>
        </tr>
        @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{$funcionario->nome}}</td>
                <td>{{$funcionario->sobrenome}}</td>
                <td>{{$funcionario->cargo}}</td>
                <td><a href="#">informações</a></td>
                <td>{{$funcionario->email}}</td>
            </tr>
        @endforeach
    </table>
</div>