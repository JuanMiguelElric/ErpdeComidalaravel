@extends('welcome')
@section('conteudo')

<div class="container text-center">
    <h1>Cadastrar Alimento</h1>
</div>
<div>
    <form class="formcardapio" action="/refeicaofoicadastradacomsucesso"   method="POST">
    {{ csrf_field() }}

    <label for="">Nome</label>
    <input name="Nome" value=""  id="nome" onchange="nomeAlimento()" type="text">
    <span id="mensagemspan"></span><br>
    <label for="">Ingrediente</label> <br>
    <textarea name="Ingredientes" id="ingredientes" cols="30" onchange="IngredientesInfor()" rows="10"></textarea> <br>
    <span id="mensagemIng"></span>
    <br>
    <label for="">preço</label>
    <input  type="text" name="price" onkeyup="preco(this,event)" id="">
    <span></span>
    <label for="">Codigo</label>
    <input name="Alimentonum" class="mb-2" type="text"> <br> <br>
    <span></span>
    <button class="btn btn-sucess btn-lg btn-block" onclick="saveData()"  type="submit">Cadastrar</button>
    </form>
</div>

@stop