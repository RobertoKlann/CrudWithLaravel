<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @section('css')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    @show

    <title>North Wind</title>
    </head>
    <body>
        <div style="background-color: #F5F5F5;">
            <div class ="container">
                <div class ="navbar-header">
                    <a href = "/ViewInicial/" class ="navbar-brand">North Wind</a>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Funcionário</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/ViewInicial/ViewConsultaFuncionario">Consultar Funcionários</a>   
                            <a class="dropdown-item" href="/ViewInicial/ViewCadastroFuncionario">Cadastrar Funcionários</a>
                            <a class="dropdown-item" href="/ViewInicial/ViewConsultaFuncionarioTerritorio">Funcionário x Território</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Território</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/ViewInicial/ViewConsultaTerritorio">Consultar Território</a>
                                <a class="nav-link disabled" href="/ViewInicial/ViewCadastroTerritorio">Cadastrar Território</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Região</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/ViewInicial/ViewConsultaRegiao">Consultar Região</a>
                                <a class="nav-link disabled" href="/ViewInicial/ViewCadastroRegiao">Cadastrar Região</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Conteudo da pagina -->
        <div class="container">
            @yield('content')
        </div>
     <!-- Footer de todas as paginas -->
        <div class="container">
              <div class="page-header">
                <h1>NORTH WIND</h1>
              </div>
              <p class="lead">Eu adoraria mudar o mundo, mas não me deram o código-fonte.</p>
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>