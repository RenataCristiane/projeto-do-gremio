<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleForum.css">
    <link rel="icon" href="imagens/favicon.png">

      <title>GRÊMIO: Fórum</title>
     
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
              <li class="nav-item active">
                <a class="nav-link" href="forum.html">Fórum</a>
              </li>
              <li class="nav-item">
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

<h1>FÓRUM</h1>
  
<!-- ************************************ FORMULÁRIO ************************************ -->

    <div class="container">
      <div class="py-5 text-center">
        <p class="lead" id="sub">NOS AJUDE A FAZER SEMPRE O MELHOR!</p>
      </div>

        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-center">Categoria</h4>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="custom-control custom-radio">
                <input id="c1" name="pMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="c1">Categoria1</label>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="custom-control custom-radio">
                <input id="c2" name="pMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="c2">Categoria2</label>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="custom-control custom-radio">
                <input id="c3" name="pMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="c3">Categoria3</label>
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
        <div class="col-6 col-md-5"><a href="index.html"><img src="imagens/logo.png"></a></div>
        <div class="col-6 col-md-0">
          <img class ="social" src="imagens/face.png">
          <img class ="social" src="imagens/insta.png">
          <img class ="social" src="imagens/twit.png">
        </div>
          <a href="#myCarousel"><div class="col-6 col-md-4"><img src="imagens/topo.png"></div></a>
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