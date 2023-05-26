<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "estoque";

// Cria uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Agora você pode usar a variável $conn para executar consultas e interagir com o banco de dados

// Exemplo de consulta
$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($result) > 0) {
  // Processa os resultados
  while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id_produto"] .
      ", Nome: " . $row["nome"] . "<br>";
  }
} else {
  echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>