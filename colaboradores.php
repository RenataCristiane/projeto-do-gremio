<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleColaboradores.css">
    <link rel="icon" href="imagens/favicon.png">

      <title>GRÊMIO: Colaboradores</title>
     
  </head>
  <body>


<!-- ************************************ MENU ************************************ -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-center" >
      <div class="container lead">
        <a class="navbar-brand" href="index.html"><img src="imagens/logomenu.png" alt="Grêmio"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Início <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Agenda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forum.html">Fórum</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="colaboradores.html">Colaboradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Estágios e Empregos</a>
              </li>
            </ul>

    <div class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2 container justify-content-between" type="search" placeholder="O que procura?" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><img src="imagens/lupa.png"></button>
    </div>
          </div>
      </div>
    </nav>


<h1>COLABORADORES</h1>

<!-- ************************************ PASSOS ************************************ -->
          
    <div class="container circulos">

      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Passo 1</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Passo 2</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Passo 3</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        </div>
      </div>
    </div>
</div>       
<!-- ************************************ FORMULÁRIO ************************************ -->

    <div class="container">
      <div class="py-5 text-center">
        <p class="lead">ENTRE PARA O NOSSO TIME DE COLABORADORES!</p>
      </div>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="pf" name="pMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="pf">Pessoa Física</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="pj" name="pMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="pj">Pessoa Jurídica</label>
          </div>
        </div>


    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-muted">Dados da Empresa</h4>
          <span class="text-muted">(Se for Pessoa Jurídica)</span>
        </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <label class="my-50">Nome da Empresa</label>
                <input type="text" class="form-control" id="nomeEmpresa" placeholder="">
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <label class="my-50">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" placeholder="XX.XXX.XXX/XXXX-XX">
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <label class="my-50">Tipo de Empresa</label>
                <input type="text" class="form-control" id="tipo" placeholder="">
              </div>
            </li>
          </ul> 
      </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Dados Cadastrais</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
          <div class="col-md-6 mb-3">
            <label for="primeironome">Nome</label>
            <input type="text" class="form-control" id="primeironome" placeholder="" value="" required>
              <div class="invalid-feedback">
                Obrigatório!
              </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="sobrenome">SobreNome</label>
            <input type="text" class="form-control" id="sobrenome" placeholder="">
          </div>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com" value="" required>
              <div class="invalid-feedback">
                Obrigatório um email válido!
              </div>
          </div>
          <div class="mb-3">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" placeholder="(XX) XXXX-XXXX" value="" required>
              <div class="invalid-feedback">
                Obrigatório um telefone válido!
              </div>
          </div>
          <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Rua XXXX, 123" required>
              <div class="invalid-feedback">
                Obrigatório!
              </div>
          </div>
          <div class="mb-3">
            <label for="complemento">Complemento <span class="text-muted">(Opcional)</span></label>
            <input type="text" class="form-control" id="complemento" placeholder="Bloco XX, Aptº XX">
          </div>
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" placeholder="" required>
                <div class="invalid-feedback">
                  Obrigatório!
                </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" placeholder="" required>
                <div class="invalid-feedback">
                  Obrigatório!
                </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cep">CEP <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="cep" placeholder="00000-000">
            </div>
          </div>
          <div class="mb-3">
            <label for="mensagem">Mensagem</label>
            <textarea type="text" class="form-control" rows="5" id="mensagem" placeholder="Em que deseja contribuir..." value="" required></textarea>
              <div class="invalid-feedback">
                Obrigatório!
              </div>
          </div>

<hr class="mb-4">

    <button class="btn btn-primary btn-lg text-center" type="submit">Enviar</button>
      </form>
      </div>
      </div>
</div>
</div>

<!-- ************************************ RODAPÉ ************************************ -->

  <footer class="bd-footer bg-primary">
    <div class="container-fluid p-3 p-md-3 ">
      <div class="row">
        <div class="container col-6 col-md-5"><a href="index.html"><img src="imagens/logo.png"></a></div>
        <div class="container col-6 col-md-0">
          <img class ="social" src="imagens/face.png">
          <img class ="social" src="imagens/insta.png">
          <img class ="social" src="imagens/twit.png">
        </div>
          <a href="#myCarousel"><div class="col-6 col-md-6"><img src="imagens/topo.png"></div></a>
      </div>

<hr class="mb-4">

  <div class="parceiros">
      PARCEIROS:

      <div class="fotosparceiros">

        <div class="row">
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
          <div class="p1">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100" height="100">
          </div>
        </div>

    </div>

  </div>

<hr class="mb-4">
    <div class="direitos">
      Copyright &copy; 2018. Todos os direitos reservados.
    </div>
 </footer>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>