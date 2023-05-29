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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

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
    <div class="section-login container-fluid  border border-1">
      <div class="row" style="height: 1200px;">
        <div class="col p-5">
          <div class="row d-flex d-row">
            <div class="col-3">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Cadastro de produtos
              </button>
            </div>
            <div class="col-9">
                <form method="post" action="process-entrada2.php">
                <div class="row">
                  <div class="col">
                  <select class="form-select" aria-label="Default select example" name="nome_produto">
                  <!--PUXAR OS PRODUTOS CADASTRADOS PARA DENTRO DO SELECT-->
                  <?php
                        //Chamada de inclusão do arquivo de conexão co o BD
                        include("../configuration/connection.php");
                        //Instrução SQL de seleção dos usuarios.
                        $SQL = "SELECT nome_produto FROM produto WHERE ativo = 1;";
                        //Executa a consulta SQL.
                        $consulta = mysqli_query($connect,$SQL);
                        //Verifica se existem retornos na consulta SQL.
                        if (mysqli_num_rows($consulta) > 0){
                            //Laço de repetição dos usuarios.
                            //Apresenta todos os usuarios do BD.
                            while ($estoque = mysqli_fetch_assoc($consulta)){
                                ?>
                                <?php
                                echo '<option value="' . $estoque['nome_produto'] . '">' . $estoque['nome_produto'] . '</option>';
                                ?>
                                <?php
                            }
                            //Fecha a conexão com o BD.
                            mysqli_close($connect);
                        }else{
                            //Retorna a mensagem para o usuario.
                            print("Não existem usuarios cadastrados no banco de dados.");
                            //Fecha a conexão com o BD.
                            mysqli_close($connect);
                        }
                        ?>
                  </select>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade_entrada">
                  </div>
                  <div class="col">
                    <input type="Submit" class="form-control" placeholder="Last name">
                  </div>
                </div>
                </form>
              </div>
          </div>
          <!--PRODUTOS CADASTRADOS-->
          <div class="row">
            <section class="container py-5">
              <div class="row justify-content-center">
              <h1>TABELA DOS PRODUTOS CADASTRADOS</h1>
              <h5>Apenas para testar o cadastro de produtos</h5>
                <table>
                    <!-- Cabeçalho -->
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <!-- Corpo da tabela -->
                    <tbody>
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
                                    <td><a href="form-edit-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="process-delete-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-trash3-fill"></i></a></td>
                                </tr>
                                <?php
                            }
                            //Fecha a conexão com o BD.
                            mysqli_close($connect);
                        }else{
                            //Retorna a mensagem para o usuario.
                            print("Não existem usuarios cadastrados no banco de dados.");
                            //Fecha a conexão com o BD.
                            mysqli_close($connect);
                        }
                        ?>
                    </tbody>
                </table> 
              </div>                  
            </section>
          </div>
          <!--ENTRADA DE PRODUTOS-->
          <div class="row">
            <section class="container py-5">
              <div class="row justify-content-center">
              <h1>TABELA DE ENTRADA DE PRODUTOS</h1>
              <h5>Os dados devem ser obtidos da tabela ENTRADA, em conjunto com o botao incluir</h5>
                <table>
                    <!-- Cabeçalho -->
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <!-- Corpo da tabela -->
                    <tbody>
                        <?php
                        //Chamada de inclusão do arquivo de conexão co o BD
                        include("../configuration/connection.php");
                        //Instrução SQL de seleção dos usuarios.
                        $SQL = "SELECT id, quantidade_entrada, nome_produto FROM entrada";
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
                                    <td><?php print($estoque["quantidade_entrada"]); ?></td>
                                    <td><a href="form-edit-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="process-delete-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-trash3-fill"></i></a></td>
                                </tr>
                                <?php
                            }
                            //Fecha a conexão com o BD.
                            mysqli_close($connect);
                        }else{
                            //Retorna a mensagem para o usuario.
                            print("Não existem usuarios cadastrados no banco de dados.");
                            //Fecha a conexão com o BD.
                            mysqli_close($connect);
                        }
                        ?>
                    </tbody>
                </table> 
              </div>                  
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--MODAL-->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Cabeçalho do modal -->
        <div class="modal-header">
          <h4 class="modal-title">Cadastro de produtos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Corpo do modal -->
        <section class="container-fluid modal-body">
            <div class="">
              <div class="col-12">
                <form method="post" action="process-entrada.php">
                  <!--NOME-->
                  <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
                    <label for="nome_produto" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Nome produto" id="nome_produto" name="nome_produto">
                  </div>
                  <!--QUANTIDADE_ITENS-->
                  <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
                    <label for="quantidade_estoque" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Quantidade de itens" id="quantidade_estoque" name="quantidade_estoque">
                  </div>
                  <!--SUBMIT-->
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