<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\funcionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function listarFuncionarios(){
        $funcionario = funcionarios::all();
        return view('funcionarios/funcionarios')->with('funcionarios',$funcionario);

    }
    public function CadastrarFuncionario(Request $request){

        return view('funcionarios/cadastro');
    }
    public function SalvarDadosFuncionario(Request $request){
       $nome = $request->input();
       $sobrenome = $request->input();
       $email = $request->input();
       $cep= $request->input();
       $cidade = $request->input();
       $endereco = $request->input();
       $bairro = $request->input();
       $complemento = $request->input();
       $nascimento = $request->input();
       $veiculo = $request->input();
       $setor= $request->input();
    }
}
