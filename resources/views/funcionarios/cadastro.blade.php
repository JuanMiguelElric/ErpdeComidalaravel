@extends('welcome')
@section('conteudo')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar Funcionário</h1>
            <form class="mt-5 p-5" action="/DadosdofuncionariofoiSalvo">
                <h2 class="text-center"> informações do funcionario</h2>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Nome</label>
                        <input name="nome"  class="form-control" placeholder="Digite o nome do funcionario:" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Sobrenome</label>
                        <input name="sobrenome"  class="form-control" placeholder="Digite o sobrenome do funcionario" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">email</label>
                        <input name="email"  type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Cep:</label>
                        <input name="cep" id="cep" onchange="checkCep(event)" placeholder="Cep" type="text">

        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Cidade</label>
                        <input name="cidade" id="cidade" placeholder="Cidade:" type="text">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Endereço</label>
                        <input name="logradouro" id="endereco" placeholder="Endereço" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Bairro</label>
                        <input name="bairro" id="bairro" placeholder="Bairro" type="text">
        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Complemento</label>
                        <input name="complemento" id="complemento" placeholder="Complemento" type="text">
        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nascimento</label>
                        <input name="nascimento" onchange="mascaraNascimento(this,event)" placeholder="Nascimento" type="text">
        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Veiculo</label>
                        <select class="form-control" name="veiculo" id="">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Cargo</label>
                        <input name="cargo" placeholder="Cargo" type="text">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Setor</label>
                        <select name="setor" class="form-control" id="">
                            <option value="Administracao">Administração</option>
                            <option value="Caixa">Caixa</option>
                            <option value="garcon">Garçon</option>
                            <option value="entregador">Entregador</option>
                            <option value="manobrista">Manobrista</option>
                        </select>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">CPF</label>
                            <input type="text" name="cpf" placeholder="Digite o Cpf" onchange="mascaraCpf(this,event)" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">RG</label>
                            <input type="text" name="rg" onchange="mascaraRg(this,event)" placeholder="Digite o RG" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Pis</label>
                            <input type="text" name="pis" onchange="mascaraPis(this,event)" placeholder="Digite o pis" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Nome da mãe</label>
                            <input type="text" name="NomeMae" placeholder="Se não possuir favor escrever = 'não possui' ">

                        </div>

                        <div class="form-group col-md-6">
                            Telefone 1
                            <input name="telefone1" onchange="mascaraPhone(this,event)" placeholder="Digite o telefone" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            Telefone 2 
                            <input  type="text" placeholder="Digite um segundo telefone">
                        </div>
                        <div class="form-group col-md-12">
                            Banco 
                            <select name="banco" class="form-control" id="">
                                <option  value="01">Banco Do Brasil</option>
                                <option value="02">Itau</option>
                                <option value="03">Santander</option>
                                <option value="04">Caixa Economica Federal</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            Agencia 
                            <input name="agencia" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            Conta 
                            <input name="conta" type="text">
                        </div>
                    </div>
                </div>
                <br>
                <button class="mt-5 btn btn-sucess btn-lg btn-block" type="submit" >Enviar</button>
            </form>

        </div>
    </div>
</div>