<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BoxVault - Cadastro de Usuário</title>
  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../CSS/est.css">
</head>

<body>
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient">
    <div class="container mx-5 my-1">
      <i class="bi bi-box-seam-fill fs-1 text-light"></i>
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
            <a href="form-create.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Cadastrar</button>
            </a>
            <a href="../login/form-login.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Login</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- MAIN -->
  <section class="position-relative background-section-cadastro d-flex justify-content-center">
    <div class="section-cadastro container border border-1 rounded shadow-lg p-5 m-5 col-6">
      <div class="row d-flex flex-wrap">
        <img class="imagem-cadastro" src="../img/img_cadastro.svg" width="500" height="500">
      </div>
      <div class="row">
        <div class="col container-formulario">
          <h5 class="text-start mb-3 text-primary fs-3 fw-bolder text-uppercase icon-shadow">Cadastre-se</h5>
          <!--FORMS-->
          <form action="process-create.php" method="post" name="formulario-create" id="formulario-create">

            <!--NOME-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="nome" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" required>
            </div>

            <!--CPF-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-lock text-white"></i></span>
              <label for="cpf" class="form-label"></label>
              <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf"  required>
            </div>

            <!--DATA_NASCIMENTO-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-lock text-white"></i></span>
              <label for="data_nascimento" class="form-label"></label>
              <input type="date" class="form-control" placeholder="Data nascimento" id="dataNascimento" name="dataNascimento"  required>
            </div>

            <!--CEP-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-lock text-white"></i></span>
              <label for="cep" class="form-label"></label>
              <input type="text" class="form-control" placeholder="CEP" id="cep" name="cep"  required>
            </div>

            <!--CODIGO DE AREA-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="codigoArea" class="form-label"></label>
              <select id="codigoArea" name="codigoArea" class="form-select">
                <option selected>Selecione o código de área...</option>
                <option value="+55">Estados Unidos (+1)</option>
                <option value="+55">China (+86)</option>
                <option value="+55">Rússia (+7)</option>
                <option value="+55">Alemanha (+49)</option>
                <option value="+55">Reino Unido (+44)</option>
                <option value="+55">França (+33)</option>
                <option value="+55">Japáo (+81)</option>
                <option value="+55">Índia(+91)</option>
                <option value="+55">Brasil (+55)</option>
                <option value="+55">Canadá (+1)</option>
              </select>
            </div>

             <!--TELEFONE-->
             <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="telefone" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Telefone" id="numero_celular" name="numero_celular" required>
            </div>

            <!--EMAIL-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-envelope text-white"></i></span>
              <label for="email" class="form-label"></label>
              <input type="email" class="form-control" placeholder="E-mail" id="endereco_email" name="endereco_email" required>
            </div>
            
            <!-- SENHA -->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="senha" class="form-label"></label>
              <input type="password" class="form-control" placeholder="senha" id="senha" name="senha" required>
            </div>

            <!--SUBMIT-->
            <div class="input-group input-field mb-4 justify-content-center">
              <input class="btn btn-primary btn-lg" type="submit" id="submit" value="Cadastrar-se">
            </div>
          </form>
        </div>
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

            <!-- BOTOES REDES SOCIAIS - IMPLEMENTAR
            <div class="d-flex gap-3 justify-content-center">
              <p class="footer-redes-sociais-icon ">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-facebook mb-3 icon-shadow text-dark"></i></a>
              </p>
              
              <p class="footer-redes-sociais-icon">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-twitter mb-3"></i></a>
              </p>
              
              <p class="footer-redes-sociais-icon">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-google-plus mb-3"></i></a>
              </p>
              
              <p class="footer-redes-sociais-icon">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-linkedin-in mb-3"></i></a>
              </p>
            </div>
             BOTOES REDES SOCIAIS - IMPLEMENTAR -->

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
  
  <!--VALIDAÇõES-->
  <script>
    //EMAIL
    var emailInput = document.getElementById('endereco_email');
    emailInput.addEventListener('blur', function() {
      var email = emailInput.value;
      if (!/\S+@\S+\.\S+/.test(email)) {alert('Esse não é um formato de e-mail válido.');}});

</script>
</body>

</html>