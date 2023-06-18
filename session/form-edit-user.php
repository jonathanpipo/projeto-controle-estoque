<?php
//Chamada de inclusão do arquivo de conexão conm o BD.

include("../configuration/connection.php");

//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");


//Recupera o ID do usuário via método GET. 
$id = $_GET["id"];

//Instrucão SQL que puxa os dados do usuário.
$SQL = "SELECT nome, cpf, data_nascimento,cep, 
        codigo_area, numero_celular, endereco_email
        FROM usuario
        WHERE id = $id;";

//Executa a instrucão SQL.
        $consulta = mysqli_query($connect, $SQL);
        
        $usuario = mysqli_fetch_assoc($consulta);

?>
<?php
//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edição de cadastro de <?php print($usuario["nome"]); ?></title>
  <link href="../CSS/est.css" rel="stylesheet">

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient shadow-sm">
    <div class="container mx-5 my-1">
    <i class="bi bi-box-seam-fill fs-1 text-light"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menubtn collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-uppercase fw-bold">
        <a class="link-light text-dark nav-link text-light mx-3" href="process-list-users.php">Voltar a lista de usuários</a>
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

  <!--SECTION-->
  <section class="position-relative background-section-login d-flex justify-content-center bg-light bg-gradient">
    <div class="section-login container-fluid  border border-1">
      <div class="row justify-content-center" style="height: auto;">
        <div class="col-8 p-5">
            <div class="row">
              <section class="container p-0 py-5">
                <div class="border border-secondary p-5 rounded shadow-sm bg-light bg-gradient shadow-lg bg-body-tertiary rounded">
                <h1 class="p-0 text-start text-uppercase mb-5">Edição de cadastro de <span class="text-primary"><?php print($usuario["nome"]); ?></span>     </h1>
                  <div class="row justify-content-start p-0 table-responsive">
                      <div class="row justify-content-center p-0">
                          <form action="procces-edit-user.php" method="post" class="row">
                            <!-- Nome e sobrenome -->
                            <div class="row">
                            <div class="col-2 my-3">
                                    <label for="id" class="form-label text-primary fw-bold">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" value= "<?php print($id); ?>" readonly>
                                </div>
                                <div class="col-5 my-3">
                                    <label for="nome" class="form-label text-primary fw-bold">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value= "<?php print($usuario["nome"]); ?>">
                                </div>
                                <div class="col-5 my-3">
                                    <label for="cpf" class="form-label text-primary fw-bold">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value= "<?php print($usuario["cpf"]); ?>">
                                </div>
                            </div>
                            <!-- Data de nascimento e genêro -->
                            <div class="row">
                                <div class="col-8 my-3">
                                    <label for="dataNascimento" class="form-label text-primary fw-bold">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value= "<?php print($usuario["data_nascimento"]); ?>">
                                </div>
                            </div>
                            <!-- CEP, código de área e celular -->
                            <div class="row">
                                <div class="col-4 my-3">
                                    <label for="cep" class="form-label text-primary fw-bold">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep"  value= "<?php print($usuario["cep"]); ?>">
                                </div>
                                <div class="col-4 my-3">
                                    <label for="codigoArea" class="form-label text-primary fw-bold">Código de Área</label>
                                    <input type="text" class="form-control" id="codigo_area" name="codigo_area" value= "<?php print($usuario["codigo_area"]); ?>"readonly>
                                </div>
                                <div class="col-4 my-3">
                                    <label for="celular" class="form-label text-primary fw-bold">Celular com DDD</label>
                                    <input type="celular" class="form-control" id="celular" name="numero_celular" value= "<?php print($usuario["numero_celular"]); ?>">
                                </div>
                            </div>
                            <!-- E-mail e senha -->
                            <div class="row">
                                <div class="col-12 my-3">
                                    <label for="email" class="form-label text-primary fw-bold">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="endereco_email" value= "<?php print($usuario["endereco_email"]); ?>">
                                </div>
                            </div>
                            <!-- Botão de voltar e de salvar -->
                            <div class="row">
                                <div class="col-12 my-3">
                                    <a href="process-list-users.php" class="btn btn-primary">Voltar</a>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>    
                </div>
              </section>
            </div>
        </div>
      </div>
    </div>
  </section>
    <!--SECTION-->
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

<?php 
//Encerra a conexão com o BD
mysqli_close($connect);
?>