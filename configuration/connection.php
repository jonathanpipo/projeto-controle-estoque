<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD - PHP</title>

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <!-- Cabeçalho do website -->
  <header class="p-3 text-center">

    <?php
    //Variaveis de conexão com a base de dados.
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "estoque_senai";

    //Comando de conexão com o banco de dados MySQL.
    $connect = mysqli_connect($host, $user, $password, $database);

    //Retorna o código do erro de conexão com a base de dados.
    if (!$connect) {
      print("Falha na conexão com a base de dados... Código do erro: " . mysqli_connect_errno());
    }
    ?>

  </header>

  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>