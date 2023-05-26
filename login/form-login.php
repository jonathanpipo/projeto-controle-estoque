<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD - Login</title>

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/est.css">
</head>

<body>
  <?php
  //Recupera a variavel via metodo GET.
  //Verifica a variavel possui valor e a apresenta.
  if (isset($retorno)) {

    //Apresenta a mensagem usando o print.
    print('

          <div class="container justify-content-center mt-5">
            <div class="alert alert-warning text-center" role="alert">
              ' . $retorno . '
            </div>
          </div>
          
          ');

  }
  ?>
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient">
    <div class="container mx-5 my-1">
      <a class="navbar-brand text-light" href="#"><img src="../img/boxicon.png" class="ahover" style="width: 59px; height: 59px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menubtn collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-uppercase fw-bold">
          <a class="link-light text-dark nav-link text-light mx-3" href="../index.php">Início</a>
          <a class="link-light text-dark nav-link text-light mx-3" href="#">Sobre</a>
          <a class="link-light text-dark nav-link text-light mx-3" href="#">Recursos</a>
          <a class="link-light text-dark nav-link text-light mx-3" href="#">Contato</a>
          <!--buttons-->
          <div class="ms-5">
            <a href="../user/form-create.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Cadastrar</button>
            </a>
            <a href="form-login.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Login</button>
            </a>
          </div>
        </div>

      </div>
    </div>
  </nav>

  <!-- Seção do formulário -->
  <section class="position-relative background-section-login d-flex justify-content-center">
    <div class="section-login container p-5 border border-1 rounded shadow-lg m-5">
      <div class="row">
        <div class="col-md-6 col-sm-12 p-0">
          <img class="imagem-login img-fluid" src="../img/imagem-login.jpg" alt="">
        </div>
        <div class="col-md-6 col-sm-12  p-0 d-flex justify-content-center align-items-center">
          <form action="process-login.php" method="post">
            <h5 class="text-center mb-5 text-primary fs-3 fw-bolder text-uppercase icon-shadow">Faça o login</h5>
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-envelope text-white"></i></span>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <!---->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-lock text-white"></i></span>
              <input type="text" class="form-control" placeholder="Senha">
            </div>
            <!---->
            <div class="input-group input-field mb-4">
              <input class="btn btn-primary btn-lg" type="submit" id="submit" value="Entrar" style="width: 100%;">
            </div>
            <div class="signin">
              <span>Já tem uma conta? <a href="#">Criar agora</a></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer id="#secaoContato" class="bg-primary bg-gradient text-white pt-5 pb-2">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left align-items-center">
        <!--FOOTER-CONTAINER-IMAGE-->
        <div class="d-none d-sm-flex justify-content-center col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 text-start">
          <img class="" src="../img/Mobile Marketing-cuate.svg" alt="" height="250" width="250">
        </div>
        <!--FOOTER-LINKS-UTEIS-->
        <div class="g-5 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-4  mx-auto text-start d-flex flex-column align-items-center justify-content-center">
          <div class="text-center text-md-start">
            <h5 class="fs-4 text-uppercase fw-bold text-light title-shadow">Links Úteis</h5>
            <p>
              <a class="text-uppercase fw-semibold  fs-5 letter-space fs-5 link-light text-dark nav-link" href="#">Página inicial</a>
            </p>
            <!---->
            <p>
              <a class="text-uppercase fw-semibold  fs-5 letter-space fs-5 link-light text-dark nav-link" href="#">Cadastro</a>
            </p>
            <!---->
            <p>
              <a class="text-uppercase fw-semibold  fs-5 letter-space fs-5 link-light text-dark nav-link" href="#">Login</a>
            </p>
          </div>

        </div>
        <!--FOOTER-CONTATO-->
        <div class="g-5 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-4  mx-auto text-start d-flex flex-column align-items-center justify-content-center">
          <div class="text-center text-md-start">
            <h5 class="fs-4 text-uppercase fw-bold text-light title-shadow">
              Contato
            </h5>
            <p>
              <span class="fw-semibold  fs-5 letter-space">Botucatu, SP</span>
            </p>
            <!---->
            <p>
              <span class="fw-semibold  fs-5 letter-space">contato@boxvault.com.br</span>
            </p>
            <!---->
            <p>
              <span class="fw-semibold  fs-5 letter-space">(14) 99999-9999</span>
            </p>
          </div>
        </div>
        <hr class="mb-4">
        <!--FOOTER-COPY-->
        <div class="row align-items-center text-shadow">
          <p>Copyright @2020All rights reservedby:
            <a href="#" style="text-decoration: none;">
              <strong class="text-white fw-bold">
                Box Vault
              </strong>
            </a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>