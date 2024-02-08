<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\funcionarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionariosController extends Controller
{
    public function listarFuncionarios(){
        $funcionario = funcionarios::all();
        return view('funcionarios/funcionarios')->with('funcionarios',$funcionario);

    }
    public function CadastrarFuncionario(){

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
       $cargo = $request->input();
       $veiculo = true;
       $setor= $request->input();

       DB::insert('insert into funcionarioslist
       (nome,sobrenome,email,endereco,cep,nascimento,cargo,veiculo, setor, cidade, bairro, complemento)
       values(?,?,?,?,?,?,?,?,?,?,?)',array($nome,$sobrenome, $email, $endereco, $cep, $nascimento, $cargo, $veiculo, $setor, $cidade, $bairro, $complemento));
       
       return view('funcionarios/informacoes');
    }
    public function maisinformacoesFuncionario(){
        return view('funcionarios/informacoes');
    }
}
