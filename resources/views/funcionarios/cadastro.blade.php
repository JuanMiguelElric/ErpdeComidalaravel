@extends('welcome')
@section('conteudo')

<div class="container-fluid">
    <h1>Cadastrar Funcionário</h1>
    <form action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Nome</label>
                <input  class="form-control" type="text">

            </div>
            <div class="form-group col-md-6">
                <label for="">Sobrenome</label>
                <input  class="form-control" type="text">

            </div>
            <div class="form-group col-md-12">
                <label for="">email</label>
                <input   type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Cep:</label>
                <input type="text">

            </div>
            <div class="form-group col-md-6">
                <label for="">Cidade</label>
                <input type="text">
            </div>
            <div class="form-group col-md-12">
                <label for="">Endereço</label>
                <input type="text">

            </div>
            <div class="form-group col-md-6">
                <label for="">Bairro</label>
                <input type="text">

            </div>
            <div class="form-group col-md-6">
                <label for="">Complemento</label>
                <input type="text">

            </div>
        </div>
        <label for="">Nascimento</label>
        <input type="text">
        <label for="">Veiculo</label>
        <select name="" id="">
            <option value="">Sim</option>
            <option value="">Não</option>
        </select>
        <br>
        <label for="">Setor</label>
        <input type="text">
    </form>
</div>