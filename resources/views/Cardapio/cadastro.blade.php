@extends('welcome')
@section('conteudo')

<div class="container text-center">
    <h1>Cadastrar Alimento</h1>
</div>
<div>
    <form action="">
    {{ csrf_field() }}
    </form>
</div>

@stop