@extends('welcome')
@section('conteudo')

<div class="container">
    <h1>Informações Adicionais do funcionarios </h1>
    <div class="row">
        <form class="mt-5" action="">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">CPF</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">RG</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Pis</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Nome da mãe</label>
                    <input type="text" placeholder="Se não possuir favor escrever = 'não possui' ">

                </div>

                <div class="form-group col-md-6">
                    Telefone 1
                    <input type="text">
                </div>
                <div class="form-group col-md-6">
                    Telefone 2 
                    <input type="text">
                </div>
                <div class="form-group col-md-12">
                    Banco 
                    <input type="text">
                </div>
                <div class="form-group col-md-6">
                    Agencia 
                    <input type="text">
                </div>
                <div class="form-group col-md-6">
                    Conta 
                    <input type="text">
                </div>
            </div>
            <button class="mt-5 btn btn-sucess btn-lg btn-block">Enviar Dados</button>

        </form>
    </div>
</div>