<?php
include("../../configuration/connection.php");
include("../../configuration/userSession.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar produtos</title>

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/est.css">
</head>

<body>

<?php

//Recupera o id por metodo get
$id = $_GET["id"];

//Realiza consulta sql para resgatar os valores
$SQL = "SELECT nome_produto, quantidade_estoque
        FROM produto
        WHERE id = $id;";
//Executa a instrucão SQL.
$consulta = mysqli_query($connect, $SQL);
$estoque = mysqli_fetch_assoc($consulta);
//Recupera a mensagem de retorno
//$retorno = $_GET ["retorno"];
//Verifica se tem um retorno e executa-o caso haja um
/*if (isset($retorno)) {
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
    */
?>

  <!-- MENU -->
  <nav class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient shadow-sm mb-5">
    <div class="container mx-5 my-1">
    <i class="bi bi-box-seam-fill fs-1 text-light"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menubtn collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-uppercase fw-bold">
        <a class="link-light text-dark nav-link text-light mx-3" href="../dashboard.php">Voltar ao estoque</a>
          <!--buttons-->
          <div class="ms-5">
            <a href="../index.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Sair</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
<body>

<?php
 /*   //Recupera a variavel via metodo GET.
    $retorno = $_GET["retorno"];

    //Verifica a variavel possui valor e a apresenta.
    if(isset($retorno)){
        
        //Apresenta a mensagem usando o print.
        print('

        <div class="container justify-content-center mt-5">
          <div class="alert alert-danger text-center" role="alert">
            ' . $retorno . '
          </div>
        </div>
        
        ');
      
    }
    */
  ?>

  <section class="container-fluid">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-10 col-md-6 col-lg-4 border border-secondary m-5 p-3 p-md-4 p-lg-5 bg-light bg-gradient shadow-lg bg-body-tertiary rounded">
          <h1 class="mb-5 text-center fs-3 text-uppercase fw-bold text-primary title-shadow">Editar Produto</h1>
          <form action="process-edit-produto.php" method="post">
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="nome" class="form-label"></label>
              <input type="text" class="form-control" id="id_produto" name="nome_produto" value="<?php print ($estoque['nome_produto'])?>">
            </div>
            <input type="hidden" class="form-control" id="id" name="id" value= "<?php print($id); ?>">
            <br>
            <div class="input-group mb-5">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="quantidade_itens" class="form-label"></label>
              <input type="number" class="form-control" placeholder="Unidades" id="quantidade_estoque" name="quantidade_estoque">
            </div>
            <div class="input-group input-field mb-4 justify-content-center">
              <input class="btn btn-primary btn-lg mx-auto" type="submit" id="submit" value="ENVIAR" style="width: 100%;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  

   <!-- FOOTER -->
   <footer id="#secaoContato" class="bg-primary bg-gradient text-white pt-5 pb-2 mt-5">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left align-items-center">
        <!--FOOTER-CONTAINER-IMAGE-->
        <div class="d-none d-sm-flex justify-content-center col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 text-start">
          <img class="" src="../../img/Mobile Marketing-cuate.svg" alt="" height="250" width="250">
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
</body>
</html>
<?php
//Fecha conexão SQL
mysqli_close($connect);
?>
