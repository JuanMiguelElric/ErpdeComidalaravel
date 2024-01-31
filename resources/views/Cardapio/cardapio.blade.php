@extends ('welcome')
@section('conteudo')
    <h1>Cardapio</h1>

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