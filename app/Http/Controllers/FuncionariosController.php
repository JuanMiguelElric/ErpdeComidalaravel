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
}
