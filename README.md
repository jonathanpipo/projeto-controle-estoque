//new-form-create
//campos-cadastro
            <!--CARGO-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="cargo" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Cargo" id="cargo" name="cargo">
            </div>
            <!--NOME-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="nome" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome">
            </div>
            <!--EMAIL-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-envelope text-white"></i></span>
              <label for="email" class="form-label"></label>
              <input type="text" class="form-control" placeholder="E-mail" id="email" name="email">
            </div>
            <!--CPF-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-lock text-white"></i></span>
              <label for="cpf" class="form-label"></label>
              <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf">
            </div>
            <!--DATA_NASCIMENTO-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-lock text-white"></i></span>
              <label for="confirmaSenha" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Data nascimento" id="confirmaSenha" name="confirmaSenha">
            </div>
            <!--TELEFONE-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="telefone" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone">
            </div>
            <!--GENERO-->
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa fa-user text-white"></i></span>
              <label for="genero" class="form-label"></label>
              <input type="text" class="form-control" placeholder="Genero" id="genero" name="genero">
            </div>
            <!--ENDERECO-->
            <div class="input-group mb-3">


//process-create
//Faz a tentativa de inserção dos dados no BD.
if (mysqli_query($connect, $SQL)) {

    //Encerra a conexão com o BD.
    mysqli_close($connect);

    //Redireciona a página para o login.
    $retorno = "Usuário cadastrado com sucesso!!!";
    header("location: ../login/form-login.php?retorno=" . $retorno);
} else {
    //Encerra a conexão com o BD.
    mysqli_close($connect);

    //Redireciona a página para o login.
    header("location: form-create.php?retorno=" . $retorno);
}


//form-create.php

  <?php
  //Recupera a variavel via metodo GET.
  $retorno = $_GET["retorno"];

  //Verifica a variavel possui valor e a apresenta.
  if (isset($retorno)) {

    //Apresenta a mensagem usando o print.
    print('

          <div class="container justify-content-center mt-5">
            <div class="alert alert-danger text-center" role="alert">
              ' . $retorno . '
            </div>
          </div>
          
          ');

  }
  ?>