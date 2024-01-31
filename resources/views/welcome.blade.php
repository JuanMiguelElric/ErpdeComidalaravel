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
        <title>ErpComida</title>

              


    </head>
    <body>
        <div>
            <nav style="background-color: #FF0000;" class="navbar  text-white fixed-top">
                <a href="/" class="navbar-brand flex-grow-1">
                    aa
                </a>
                <ul class="nav text-white ">
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Dropdown</button>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                  
                        <a href="" class="nav-link tex-reset d-none d-xl-flex" >Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href=""class=" nav-link tex-reset d-none d-xl-flex" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                            funcionario
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link tex-reset d-none d-xl-flex "  data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Cozinha</a></li>
                    <li class="nav-item"><a href=""class="nav-link tex-reset d-none d-xl-flex ">Financeiro</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-reset d-none d-xl-flex">Usuario</a></li>
                </ul>
            </nav>


            
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card car-body text-dark" id="collapseExample">
                    aaaaaaaaaaaaaaaaaa
                </div>

            </div>

        </div>
        <div>
            @yield('conteudo');

        </div>
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script> 
    </body>
</html>
