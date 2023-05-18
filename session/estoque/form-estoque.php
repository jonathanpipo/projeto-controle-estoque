<?php

include("../../configuration/connection.php");
include("../../configuration/userSession.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



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


<form action="process-estoque.php" method="post">

<p>NOME PRODUTO</p>
<input type="text" class="form-control" id="id_produto" name="nome_produto" >
<p>QUANTIDADE</p>
<input type="text" class="form-control" id="quantidade_estoque" name="quantidade_estoque" >
<button type="submit">cadastrar</button>
</form>

    
</body>
</html>


