<?php
//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de usuários cadastrados</title>
  <link href="../CSS/est.css" rel="stylesheet">

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://www.w3schools.com/lib/w3.js"></script>
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
          <a class="link-light text-dark nav-link text-light mx-3" href="../index.php">Página Inicial</a>
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
  <!-- SUBMENU SESSÃO-->
  <nav style="--bs-bg-opacity: .5;" class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient bg-primary-subtle">
    <div class="row">
      <div class="col-12">
        <div class="container mx-5 my-1">
          <div class="navbar-nav text-uppercase fs-5">
            <a class="link-light text-dark nav-link text-light mx-3" href="estoque/form-list-saida.php">Lista de Saída</a>
            <a class="link-light text-dark nav-link text-light mx-3" href="estoque/form-list-entrada.php">Lista de Entrada</a>
            <a class="link-light text-dark nav-link text-light mx-3" href="dashboard.php">Estoque</a>
            <a class="link-light text-dark nav-link text-light mx-3" href="process-list-users.php">Lista de Usuario</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- SECTION-->
  <section class="position-relative background-section-login d-flex justify-content-center bg-light bg-gradient">
    <div class="section-login container-fluid  border border-1">
      <div class="row justify-content-center" style="height: auto;">
        <div class="col-8 p-5">
            <div class="row">
              <section class="container p-0 py-5">
              <div class="border border-secondary p-5 rounded shadow-sm bg-light bg-gradient shadow-lg bg-body-tertiary rounded">
                  <h1 class="p-0 text-start text-uppercase mb-3">Lista de <span class="text-primary">usuários</span> cadastrados</h1>
                  <div class="row justify-content-start p-0 table-responsive">
                    <table class="table border border-secondary-subtle p-3 shadow bg-light bg-gradient table-striped text-center">
                      <!-- Cabeçalho -->
                      <thead>
                          <tr class="text-uppercase fw-bold table-primary">
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          <th scope="col">CPF</th>
                          <th scope="col">Visualizar</th>
                          <th scope="col">Editar</th>
                          <th scope="col">Excluir</th>
                        </tr>
                      </thead>
                      <!-- Corpo da tabela -->
                      <tbody class="table-group-divider">  
                        <?php
                        //chamada de inclusao do arquivo de conexao com o db.
                        include("../configuration/connection.php");
                        //Instrucao SQL de selecao dos usuarios.
                        $SQL = "SELECT id, nome, cpf FROM usuario Where ativo = 1;";
                        //Executa a consulta SQL.
                        $consulta = mysqli_query($connect, $SQL); 
                        //Verifica se existem retornos na consula SQL.
                        if (mysqli_num_rows($consulta) > 0 ) {
                            //continua a execucão.
                            //Laço de repeticão dos usuarios.
                            //Apresenta todos os usuarios do BD.
                            while($usuario = mysqli_fetch_assoc($consulta)){
                                ?>
                        <tr>
                            <th scope="row"><?php print($usuario["id"]); ?></th>
                              <td><?php print($usuario["nome"]); ?></td>
                              <td><?php print($usuario["cpf"]); ?></td>
                              <td><a href="form-view-user.php?id=<?php print($usuario["id"]); ?>"><i class="bi bi-eye-fill"></i></a></td>
                              <td><a href="form-edit-user.php?id=<?php print($usuario["id"]); ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
                              <td><a href="process-delete-user.php?id=<?php print($usuario["id"]); ?>"><i class="bi bi-x-circle-fill text-danger"></i></a></td>
                        </tr>
                                <?php
                                //Fecha a conexão com o BD
                              }
                        }
                        else{
                            //retorna a mensagem para o usuario.
                            print("Não existem usuários cadastrados no Banco de Dados");
                            //Fecha a conexão com o BD
                            mysqli_close($connect);
                        }
                        ?>
                      </tbody>
                    </table> 
                  </div>  
                </div>
              </section>
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