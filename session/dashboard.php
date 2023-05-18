<?php
//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD - Dashboard</title>
  <link href="../CSS/est.css" rel="stylesheet">


  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <!-- Menu do website -->
  <nav class="navbar navbar-expand-lg body">
    <div class="container-fluid">
      <a class="navbar-brand text-light ahover" href="#"><img src="../img/boxicon.png" class="ahover" style="width: 59px; height: 59px;"> Box Vault</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
        <a class="nav-link text-light" href="estoque/form-estoque.php">Cadastrar Produto</a>
      </div>
    </div>
  </nav>

  <?php


$retorno = $_GET ["retorno"];

if (isset($retorno)) {
  print(
    '

          <div class="container justify-content-center mt-5">
            <div class="alert alert-danger text-center" role="alert">
              ' . $retorno . '
            </div>
          </div>
          
          '
  );
}
?>


  <!-- Seção do formulário -->
  <section class="container py-5">

    <div class="row justify-content-center">

      <div>
        <p>Bem-vindo a sessão restrita de usuário...</p>
      </div>

    </div>

  </section>

  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>