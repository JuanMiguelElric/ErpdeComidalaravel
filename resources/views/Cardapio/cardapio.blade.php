@extends ('welcome')
@section('conteudo')
    <div class="d-flex">
        <!--aFASTAMENTO-->
        <div class="mr-auto p-2"><h1>Cardapio</h1></div>
        <div class="p-2"><i class="fi fi-br-plus"></i></div>
        <div class="p-2"><a href="/cadastraralimentonocardapio">Adicionar</a></div>
    </div>

    <table>
        @foreach($comida as $co)
            <tr>
                <td>{{$co->Nome}}</td>
                <td>{{$co->Ingredientes}}</td>
                <td>R${{$co->price}}</td>
                <td>{{$co->Alimentonum}}</td>
            </tr>
        @endforeach


    </table>
@stop