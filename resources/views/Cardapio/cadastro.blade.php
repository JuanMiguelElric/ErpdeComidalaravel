@extends('welcome')
@section('conteudo')

<div class="container text-center">
    <h1>Cadastrar Alimento</h1>
</div>
<div>
    <form action="/refeicaofoicadastradacomsucesso">
    {{ csrf_field() }}
    <label for="">Nome</label>
    <input name="Nome" id="nome" onchange="nomeAlimento()" type="text">
    <label for="">Ingrediente</label> <br>
    <textarea name="Ingredientes" id="" cols="30" rows="10"></textarea> <br>
    <label for="">preço</label>
    <input  type="text" name="price" id="">
    <label for="">Codigo</label>
    <input name="Alimentonum" class="mb-2" type="text"> <br> <br>
    <button class="btn btn-sucess btn-lg btn-block" type="submit">Cadastrar</button>
    </form>
</div>

@stop