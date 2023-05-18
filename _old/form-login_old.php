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
  <body class="body">

    <!-- Cabeçalho do website -->
    

    <?php
      //Recupera a variavel via metodo GET.
      $retorno = $_GET["retorno"];

      //Verifica a variavel possui valor e a apresenta.
      if(isset($retorno)){
          
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

    <!-- Seção do formulário -->
    <section class="container py-5">

      <div class="row justify-content-center">

        <form action="process-login.php" method="post" class="forms p-5" style="background-color:#ffff">

        
       <a  href="../index.php"> <img src="../img/arrow.png" alt="" class="retornobtn"></a>
        <!-- Imagem -->

        <h1 class="welcome">Bem Vindo!
        <img src="../img/boxicon.png" class="icone" alt="" style="height:200px; width:200px;">
        </h1>
        
          <div class="labelbaixo">
          <!-- E-mail -->
          <div class="emailabel mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <!-- Senha -->
          <div class="senhalabel mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>

          <!-- Lembrar-me -->
          <div class="checklabel mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
            <label class="form-check-label" for="lembrar">Lembrar-me</label>
          </div>
          </div>
          <button type="submit" class="buttonlabel btn">Entrar</button>
          
          <div class="criarconta">
          <p class="paragrafo">Não possui uma conta? </p><a class="nav-link cadastro" href="../user/form-create.php">Cadastre-se!</a>
          </div>
        </form>

      </div>

    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>