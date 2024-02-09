<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="ERP">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{{asset('css/index.css')}}" rel="stylesheet" type="text/css"> 

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>



 
        <title>ErpComida</title>

              


    </head>
    <body>

           <div class="d-flex justify-content-between">
               <nav  class="navbar navbar-expand-lg navbar-danger  bg-danger    text-white fixed-top">
                   <a href="">aaaa</a>
                   <div class="container">
                       <div class=" container-fluid float-right   collapse  navbar-collapse " id="conteudoNavbarSuportado">
                           <ul class="navbar-nav text-white  mr-auto"> 
                            <li class="mr-4 text-white  nav-item dropdown" ><a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio</a></li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Funcionario
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Administrativo</a>
                                       <a class="dropdown-item" href="/listagemdosfuncionarios">Funcionários</a>
                                       <a class="dropdown-item" href="#">Cadastro</a>
                                       <a class="dropdown-item" href="#">Relatórios</a>
                                       <a class="dropdown-item" href="#">Juridicos</a>
                                       <a class="dropdown-item" href="#">Pagamentos</a>
                                       <a class="dropdown-item" href="#">Escalas</a>
                                       
                                   </div>
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Cardapio
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="/cardapioAlimenticio">Cardapio</a>
                                       <a class="dropdown-item" href="#">Chefe</a>
                                       <a class="dropdown-item" href="#">Cozinha</a>
                                       <a class="dropdown-item" href="#">Estoque</a>
                                       <a class="dropdown-item" href="#">Tributação</a>
                                       <a class="dropdown-item" href="#">Aplicativos</a>
                                       <a class="dropdown-item" href="#">Delivery</a>

                                       <a class="dropdown-item" href="#">Vencimento Produtos</a>
                                       <div class="dropdown-divider"></div>
                                       
                                   </div>
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Frota
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Combustivel</a>
                                       <a class="dropdown-item" href="#">Veiculos</a>
                                       <a class="dropdown-item" href="#">Pagamentos</a>
                                       <a class="dropdown-item" href="#">Admissões</a>

                                   </div>
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Dispesas
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Receber</a>
                                       <a class="dropdown-item" href="#">Pagar</a>
                                       <a class="dropdown-item" href="#">Emprestimos</a>
                                       <a class="dropdown-item" href="#">Notas</a>
                                       <a class="dropdown-item" href="#">Combustivel</a>
                                       <a class="dropdown-item" href="#">Juridicos</a>
                                       <a class="dropdown-item" href="#">Controlle</a>
                                       <a class="dropdown-item" href="#">Informativo</a>
                                   
                                       
                                       
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Algo mais aqui</a>
                                   </div>
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        aplicativo
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Aplicativos</a>
                                       <a class="dropdown-item" href="#">Administrativo</a>
                                       <a class="dropdown-item" href="#">Aprovados</a>
                                       <a class="dropdown-item" href="#">Cancelamentos</a>
                                       <a class="dropdown-item" href="#">Funcionarios</a>
                                       <a class="dropdown-item" href="#">Veiculos</a>
                                   </div>
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Administrativo
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Cadastro F</a>
                                       <a class="dropdown-item" href="#">Relatórios</a>
                                       <a class="dropdown-item" href="#">Setores</a>
                                       <a class="dropdown-item" href="#">Pagamentos</a>
                                       <a class="dropdown-item" href="#">Receber</a>
                                       <a class="dropdown-item" href="#">juridico</a>
                                       <a class="dropdown-item" href="#">Cardapio</a>
                                       <a class="dropdown-item" href="#">Chefe</a>
                                       <a class="dropdown-item" href="#">Controle</a>
                                       <a class="dropdown-item" href="#">Informativo</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Algo mais aqui</a>
                                   </div>
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Informativo
                                   </a>
       
       
                               </li>
                               <li class="mr-4  nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Estabelecimento
                                   </a>
                               
       
                               </li>

                               <li class="mr-4 nav-item dropdown">
                                   <a class="text nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Usuario
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Perfil</a>
                                       <a class="dropdown-item" href="#">Licença</a>
                                       <a class="dropdown-item" href="#">Configurações</a>
                                       <a class="dropdown-item" href="#">Sair</a>
                                       
                                   </div>
       
                               </li>
                           </ul>
       
                       </div>

                   </div>
               </nav>

           </div>


            
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card car-body text-dark" id="collapseExample">
                    aaaaaaaaaaaaaaaaaa
                </div>

            </div>
        

        </div>
        <div>
            @yield('conteudo');

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <script src="{{ asset('js/index.js') }}"></script>
        <script src="{{ asset('js/cep.js') }}"></script>
        <script src="{{ asset('js/mask.js') }}"></script>
        <script src="{{ asset('js/Ajaxcadastro.js') }}" type="text/javascript"></script>
    </body>
</html>
