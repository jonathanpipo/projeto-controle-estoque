<?php
//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BoxVauld - Estoque</title>
  <link href="../CSS/est.css" rel="stylesheet">

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://www.w3schools.com/lib/w3.js"></script>

  <!--- Link Google Fonts ---->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Raleway:wght@100&family=Roboto:ital,wght@0,100;1,100&display=swap" rel="stylesheet">

</head>

<body>
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient shadow-sm">
    <div class="container mx-5">
    <i class="bi bi-box-seam-fill fs-1 text-light"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menubtn collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-uppercase fw-bold">
          <a class="link-light text-dark nav-link text-light mx-3" href="../index.php">Página Inicial</a>
          <div class="ms-5">
            <a href="../configuration/logout.php">
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
  <!-- SECTION -->
  <section class="position-relative background-section-login d-flex justify-content-center bg-light bg-gradient">
    <div class="section-login container-fluid  border border-1">
      <div class="row justify-content-center" style="height: auto;">
        <div class="col-8 p-5">
              <section class="container p-0 py-5">
                <div class="border border-secondary p-5 rounded shadow-sm bg-light bg-gradient shadow-lg bg-body-tertiary rounded">
                  <h1 class="p-0 text-start text-uppercase mb-3">Lista de <span class="text-primary">estoque</span></h1>
                    <div class="row border border-secondary p-3 mb-3 rounded shadow-sm bg-light bg-gradient shadow bg-body-tertiary rounded">
                    <div class="col-6 p-0 d-flex flex-column align-items-start justify-content-start">
                        <h5 class="mb-3">Cadastrar <span class="text-primary">novo</span> produto:</h5>
                        <form class="col-12" action="estoque/process-estoque.php" method="post">
                          <div class="row">
                            <div class="col-12">
                              <input type="text" class="form-control mb-3 shadow-sm" placeholder="Nome Produto" class="form-control" id="id_produto" name="nome_produto" >
                              <input type="submit" class="form-control btn btn-success shadow-sm" placeholder="Last name" value="Cadastrar">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-6 p-0 d-flex flex-column align-items-end justify-content-end">
                          <div class="d-flex flex-row">
                            <button type="button" class="btn btn-lg btn-success shadow-sm" data-toggle="modal" data-target="#myModal">
                              <i class="bi bi-plus-circle me-2"></i>Entrada
                            </button>
                            <button type="button" class="btn btn-lg btn-danger  shadow-sm ms-5" data-toggle="modal" data-target="#myModal-saida">
                              <i class="bi bi-x-circle me-2"></i>Saída
                            </button>
                          </div>
                      </div>
                    </div>
                    <div class="row justify-content-start p-0 table-responsive">
                      <table class="table table-bordered border border-secondary-subtle p-3 shadow bg-light bg-gradient table-striped text-center">
                        <!-- Cabeçalho -->
                        <thead>
                            <tr class="text-uppercase fw-bold table-primary">
                                <th scope="col ">ID</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>
                        <!-- Corpo da tabela -->
                        <tbody class="table-group-divider">
                            <?php
                            //Chamada de inclusão do arquivo de conexão co o BD
                            include("../configuration/connection.php");
                            //Instrução SQL de seleção dos usuarios.
                            $SQL = "SELECT id, nome_produto, quantidade_estoque FROM produto WHERE ativo = 1;";
                            //Executa a consulta SQL.
                            $consulta = mysqli_query($connect,$SQL);
                            //Verifica se existem retornos na consulta SQL.
                            if (mysqli_num_rows($consulta) > 0){
                                //Laço de repetição dos usuarios.
                                //Apresenta todos os usuarios do BD.
                                while ($estoque = mysqli_fetch_assoc($consulta)){
                                    ?>
                                    <tr>
                                        <td scope="row" ><?php print($estoque["id"]); ?></td>
                                        <td style="border-style:solid"><?php print($estoque["nome_produto"]); ?></td>
                                        <td><?php print($estoque["quantidade_estoque"]); ?></td>
                                        <td><a href="estoque/form-edit-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
                                        <td><a href="estoque/process-delete-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-x-circle-fill text-danger"></i></a></td>
                                    </tr>
                                    <?php
                                }
                                //Fecha a conexão com o BD.
                                mysqli_close($connect);
                            }else{
                                //Fecha a conexão com o BD.
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
  </section>
  <!-- MODAL ENTRADA -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Cabeçalho do modal entrada -->
        <div class="modal-header">
          <h4 class="modal-title">Entrada de produtos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Corpo do modal entrada -->
        <section class="container-fluid modal-body">
            <div class="">
              <div class="col-12">
                <form method="post" action="estoque/process-entrada.php">
                  <!--NOME entrada-->
                  <div class="input-group mb-3">
                            <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
                            <label for="nome" class="form-label"></label>
                            <select id="produto" name="produto" class="form-select" >
                              <?php
                                //Chama o arquivo de conexão com o BD.
                                include("../configuration/connection.php");
                                          
                                //Instrução que permite selecionar todos os produtos que irão ser apresentados ao usuário.
                                $SQL = "SELECT id, nome_produto FROM produto WHERE ativo = 1;";

                                //Executa a consulta SQL.
                                $consulta = mysqli_query($connect, $SQL);
                                          
                                //Exibe os produtos.
                                while ($produto = mysqli_fetch_assoc($consulta)) {
                                          
                                  //Exibe todos os podutos em um elemento dropdown.
                                  print('<option value="' . $produto['id'] . '">' . $produto['nome_produto'] . '</option>');
                                }
                                          
                                //Encerra a conexão com o BD.
                                mysqli_close($connect);
                              ?>
                            </select>
                          </div>
                  <!--QUANTIDADE_ITENS entrada-->
                  <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
                    <label for="quantidade_estoque" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Quantidade de itens" id="quantidade_entrada" name="quantidade_entrada">
                  </div>
                  <!--SUBMIT entrada-->
                  <div class="input-group input-field mb-4 justify-content-center container">
                  <input class="btn btn-primary btn-lg mx-auto" type="submit" id="submit" value="ENVIAR" style="width: 100%;">
                  </div>
                  </form>
              </div>
            </div>
        </section>
      </div>
    </div>
  </div>
  <!-- MODAL SAIDA -->
  <div class="modal" id="myModal-saida">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Cabeçalho do modal saida -->
        <div class="modal-header">
          <h4 class="modal-title">Saida de produtos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Corpo do modal saida -->
        <section class="container-fluid modal-body">
            <div class="">
              <div class="col-12">
                <form method="post" action="estoque/process-saida.php">
                  <!--NOME saida-->
                  <div class="input-group mb-3">
                            <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
                            <label for="nome" class="form-label"></label>
                            <select id="produto" name="produto" class="form-select">
                              <?php
                                //Chama o arquivo de conexão com o BD.
                                include("../configuration/connection.php");
                                          
                                //Instrução que permite selecionar todos os produtos que irão ser apresentados ao usuário.
                                $SQL = "SELECT id, nome_produto FROM produto WHERE ativo = 1;";

                                //Executa a consulta SQL.
                                $consulta = mysqli_query($connect, $SQL);
                                          
                                //Exibe os produtos.
                                while ($produto = mysqli_fetch_assoc($consulta)) {
                                          
                                  //Exibe todos os podutos em um elemento dropdown.
                                  print('<option value="' . $produto['id'] . '">' . $produto['nome_produto'] . '</option>');
                                }    
                                //Encerra a conexão com o BD.
                                mysqli_close($connect);
                              ?>
                            </select>
                          </div>
                  <!--QUANTIDADE_ITENS saida-->
                  <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
                    <label for="quantidade_estoque" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Quantidade de itens" id="quantidade_saida" name="quantidade_saida">
                  </div>
                  <!--SUBMIT saida-->
                  <div class="input-group input-field mb-4 justify-content-center container">
                  <input class="btn btn-primary btn-lg mx-auto" type="submit" id="submit" value="ENVIAR" style="width: 100%;">
                  </div>
                  </form>
              </div>
            </div>
        </section>
      </div>
    </div>
  </div>
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