@extends('welcome')
@section('conteudo')

<div class="container text-center">
    <h1>Cadastrar Alimento</h1>
</div>
<div>
    <form action="">
    {{ csrf_field() }}
    <label for="">Nome</label>
    <input type="text">
    <label for="">Ingrediente</label> <br>
    <textarea name="" id="" cols="30" rows="10"></textarea> <br>
    <label for="">preço</label>
    <input type="text" name="" id="">
    <label for="">Codigo</label>
    <input type="text"> <br>
    <button class="btn btn-sucess btn-lg btn-block">Cadastrar</button>
    </form>
</div>

@stop