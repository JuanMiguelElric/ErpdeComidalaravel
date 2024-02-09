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
       $nome = $request->input('nome');
       $sobrenome = $request->input('sobrenome');
       $email = $request->input('email');
       $cep= $request->input('cep');
       $cidade = $request->input('cidade');
       $endereco = $request->input('logradouro');
       $bairro = $request->input('bairro');
       $complemento = $request->input('complemento');
       $nascimento = $request->input('nascimento');
       $cargo = $request->input('cargo');
       $veiculo = $request->input('veiculo');
       $setor= $request->input('setor');
       $cpf = $request->input('cpf');
       $rg = $request->input('rg');
       $pis = $request->input('pis');
       $telefone1 = $request->input('telefone1');
       $NomeMae = $request->input('NomeMae');
       $banco = $request->input('banco');
       $agencia = $request->input('agencia');
       $conta = $request->input('conta');

       DB::insert('insert into funcionarioslist
       (nome,sobrenome,email,cep, logradouro,nascimento,cargo,veiculo, setor, cidade, bairro, complemento, cpf, rg,pis, telefone1,NomeMae, banco, agencia, conta)
       values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
       array($nome,$sobrenome, $email,  $cep, $endereco, $nascimento, 
       $cargo, $veiculo, $setor, $cidade, $bairro, $complemento, $cpf,
        $rg,$pis,$telefone1, $NomeMae, $banco, $agencia, $conta));
       
       return view('funcionarios/informacoes');
    }
    //controller para informar as informações de cada funcionário
    public function InformativocadaFuncionario($id){
        $resposta = DB::table('funcionarioslist')->where('id',$id)->first();
        if(empty($resposta)){
            return  "Esse funcionário não existe";
        }
        return view('funcionarios/informativo')->with('funcionario',$resposta);
    }

}
