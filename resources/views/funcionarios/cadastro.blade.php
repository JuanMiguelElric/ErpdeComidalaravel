@extends('welcome')
@section('conteudo')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar Funcionário</h1>
            <form class="mt-5 p-5" action="">
                <h2 class="text-center">Primeiras informações</h2>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Nome</label>
                        <input  class="form-control" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Sobrenome</label>
                        <input  class="form-control" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">email</label>
                        <input   type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Cep:</label>
                        <input id="cep" onchange="checkCep(event)" type="text">

        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Cidade</label>
                        <input id="cidade" type="text">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Endereço</label>
                        <input id="endereco" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bairro</label>
                        <input id="bairro" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Complemento</label>
                        <input id="complemento" type="text">
        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nascimento</label>
                        <input type="text">
        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Veiculo</label>
                        <select class="form-control" name="" id="">
                            <option value="">Sim</option>
                            <option value="">Não</option>
                        </select>
        
                    </div>
                </div>
                <label for="">Setor</label>
                <input type="text">
                <br>
                <button class="mt-5 btn btn-sucess btn-lg btn-block" >Enviar</button>
            </form>

        </div>
    </div>
</div>