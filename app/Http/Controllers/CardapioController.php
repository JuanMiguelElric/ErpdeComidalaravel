<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cardpio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller
{
    public static function CadastrarAlimento(){
        return view('Cardapio/cadastro');

    }
    public static function Cardapio(){
        $cardapio = Cardpio::all();
        return view('Cardapio/cardapio')->with('comida',$cardapio);

    }
    public static function CadastradoAlimento(Request $request){
        $nome = $request->input('Nome');
        $ingredientes = $request->input('Ingredientes');
        $preco = $request->input('price');
        $numero=$request->input('Alimentonum');

        DB::insert('insert into cardapioestabelecimento
        (Nome,Ingredientes,price,Alimentonum) values(?,?,?,?)',
        array($nome,$ingredientes,$preco,$numero));

        return view('requisicao/cardapio');

    }
}
