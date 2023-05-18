<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Cadastro de Usuário</title>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/est.css">  
</head>
  <body class="body">

    <?php
      //Recupera a variavel via metodo GET.
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
    ?>
    
<div class="lugarimg">
<div class="text">   
<img src="../img/boxicon.png" style="height:300px ;width:300px;" alt="">
<h1>Vamos começar?</h1>
<br>
<p>para utilizar<br>nossa plataforma, comece criando sua conta</p>
<br>
<p>Já possui uma conta?</p>
<button class="btnlogin"><a class=" nav-link text-light" href="../login/form-login.php"><p class="pcss">Login<p></a></button>

</div>
</div>

<div class="divcadastro">

 <h1 class="texto">Cria conta</h1>
  <!-- Seção do formulário -->

 <section class="sectionform">

 <div class="row">

<form action="process-create.php" method="post" class="formscadastro">



<!-- Nome e CPF -->

<div class="row">

<div class="col-4 my-3">
 <label for="nome" class="form-label">Nome</label>

 <input type="text" class="form-control" id="nome" name="nome">

</div>

 <div class="col-4 my-3">

<label for="cpf" class="form-label">CPF</label>
 <input type="text" class="form-control" id="cpf" name="cpf">

</div>
</div>



 <!-- Data de nascimento e genero -->

<div class="row">
 <div class="col-4 my-3">
 <label for="dataNascimento" class="form-label">Data de Nascimento</label>
<input type="date" class="form-control" id="dataNascimento" name="dataNascimento">

</div>




<!-- CEP, endereço e número da residência -->

               

                    <div class="col-4 my-3">

                        <label for="cep" class="form-label">CEP</label>

                        <input type="text" class="form-control" id="cep" name="cep">

                    </div>

                 


 

                <!-- Bairro, cidade e estado -->

                 


 

                <!-- Código de área e celular -->

                <div class="row">

                <div class="col-4 my-3">

                        <label for="codigoArea" class="form-label">Código de Área</label>

                        <select id="codigoArea" name="codigoArea" class="form-select">

                          <option selected>Selecione o código de área...</option>

                          <option value="+55">Brasil (+55)</option>

                        </select>

                    </div>

                    <div class="col-4 my-3">

                        <label for="celular" class="form-label">Celular com DDD</label>

                        <input type="celular" class="form-control" id="numero_celular" name="numero_celular">

                    </div>

                </div>


 

                <!-- E-mail e senha -->

                <div class="row">

                    <div class="col-4 my-3">

                        <label for="email" class="form-label">E-mail</label>

                        <input type="email" class="form-control" id="endereco_email" name="endereco_email">

                    </div>

                    <div class="col-4 my-3">

                        <label for="senha" class="form-label">Senha</label>

                        <input type="password" class="form-control" id="senha" name="senha">

                    </div>

                    <div class="row">

                    <div class="col-4 my-3">

                        <label for="confirmaSenha" class="form-label">Confirme a Senha</label>

                        <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha">

                    </div>

                    </div>

                </div>

               

                <!-- Botão de cadastrar -->

                <div class="row">

                    <div class="col-12 my-3">

                        <button type="submit" class="buttonlabel btn">Salvar</button>

                       

                    </div>

                </div>

            </form>

        </div>

    </section>


 

    </div>



    
    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>