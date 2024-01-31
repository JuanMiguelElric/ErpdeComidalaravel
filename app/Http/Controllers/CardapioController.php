<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cardpio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller
{
    public static function CadastrarAlimento(){

    }
    public static function Cardapio(){
        $cardapio = Cardpio::all();
        return view('Cardapio/cardapio')->with('comida',$cardapio);

    }
    public static function CadastradoAlimento(Request $request){
        $nome = $request->input('nome');
        $ingredientes = $request->input('ingredientes');
        $preco = $request->input('preco');
        $numero=$request->input('numero');

        DB::insert('inset into cardapioestabelecimento
        (nome,ingredientes,price,numero) values(?,?,?,?)',
        array($nome,$ingredientes,$preco,$numero));

    }
}
