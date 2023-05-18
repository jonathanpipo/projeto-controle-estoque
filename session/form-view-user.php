<?php
//Chamada de inclusão do arquivo de conexão conm o BD.

include("../configuration/connection.php");

//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");


//Recupera o ID do usuário via método GET. 
$id = $_GET["id"];

//Instrucão SQL que puxa os dados do usuário.
$SQL = "SELECT nome, cpf, data_nascimento, genero, cep, logradouro, 
        complemento, numero_residencia, bairro, cidade, estado,
        codigo_area, numero_celular, endereco_email
        FROM usuario
        WHERE id = $id;";

//Executa a instrucão SQL.
        $consulta = mysqli_query($connect, $SQL);
        
        $usuario = mysqli_fetch_assoc($consulta);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Informações de Usuário</title>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- Cabeçalho do website -->
    <header class="p-3 text-center">
        <h2 class="text-uppercase text-success">CRUD - INFORMAÇÕES DE USUÁRIO</h2>
        <h4>Escola SENAI "Luiz Massa" - Botucatu (SP)</h4>
    </header>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
              <a class="nav-link text-light" href="process-list-users.php">Lista de Usuários</a>
            </div>
           </div>
        </div>
    </nav>

    <!-- Seção do formulário -->
    <section class="container py-5">
        <div class="row justify-content-center">


            <form class="row">
                
                <!-- Nome e sobrenome -->
                <div class="row">

                <div class="col-2 my-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value= "<?php print($id); ?>" readonly>
                    </div>

                    <div class="col-5 my-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value= "<?php print($usuario["nome"]); ?>"readonly>
                    </div>
                  


                    <div class="col-5 my-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value= "<?php print($usuario["cpf"]); ?>"readonly>
                    </div>
                </div>

                <!-- Data de nascimento e genêro -->
                <div class="row">
                    <div class="col-8 my-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value= "<?php print($usuario["data_nascimento"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="genero" class="form-label">Gênero</label>
                        <input type="text" class="form-control" id="genero" name="genero" value= "<?php print($usuario["genero"]); ?>"readonly>
                    </div>
                </div>

                <!-- CEP, endereço e número da residência -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep"  value= "<?php print($usuario["cep"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="logradouro"  value= "<?php print($usuario["logradouro"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="numeroResidencia" class="form-label">Número da Residência</label>
                        <input type="text" class="form-control" id="numeroResidencia" name="numeroResidencia" value= "<?php print($usuario["numero_residencia"]); ?>"readonly>
                    </div>
                </div>

                <!-- Complemento, bairro e cidade -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value= "<?php print($usuario["complemento"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value= "<?php print($usuario["bairro"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value= "<?php print($usuario["cidade"]); ?>"readonly>
                    </div>
                </div>

                <!-- Estado, código de área e celular -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="estado" class="form-label">UF</label>
                        <input type="text" class="form-control" id="estado" name="estado" value= "<?php print($usuario["estado"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="codigoArea" class="form-label">Código de Área</label>
                        <input type="text" class="form-control" id="codigo_area" name="codigo_area" value= "<?php print($usuario["codigo_area"]); ?>"readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="celular" class="form-label">Celular com DDD</label>
                        <input type="celular" class="form-control" id="celular" name="numero_celular" value= "<?php print($usuario["numero_celular"]); ?>"readonly>
                    </div>
                </div>

                <!-- E-mail e senha -->
                <div class="row">
                    <div class="col-12 my-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="endereco_email" value= "<?php print($usuario["endereco_email"]); ?>"readonly>
                    </div>
                </div>
                
                <!-- Botão de voltar e de salvar -->
                <div class="row">
                    <div class="col-12 my-3">
                        <a href="process-list-users.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
//Encerra a conexão com o BD
mysqli_close($connect);
?>