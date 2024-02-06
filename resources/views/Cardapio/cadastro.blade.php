@extends('welcome')
@section('conteudo')

<div class="container text-center">
    <h1>Cadastrar Alimento</h1>
</div>
<div>
    <form action="/refeicaofoicadastradacomsucesso">
    {{ csrf_field() }}
    <label for="">Nome</label>
    <input name="Nome" value="" id="nome" onchange="nomeAlimento()" type="text">
    <span id="mensagemspan"></span><br>
    <label for="">Ingrediente</label> <br>
    <textarea name="Ingredientes" id="ingredientes" cols="30" onchange="Ingredientes()" rows="10"></textarea> <br>
    <span></span>
    <br>
    <label for="">preço</label>
    <input  type="text" name="price" onkeyup="preco(this,event)" id="">
    <span></span>
    <label for="">Codigo</label>
    <input name="Alimentonum" class="mb-2" type="text"> <br> <br>
    <span></span>
    <button class="btn btn-sucess btn-lg btn-block" type="submit">Cadastrar</button>
    </form>
</div>

@stop