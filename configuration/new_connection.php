<?php
// Conectar-se ao banco de dados
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'estoque_senai';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Coletar os dados do formulário
if (isset($_POST['cargo'])) {$cargo = mysqli_real_escape_string($conn, $_POST['cargo']);}


if (isset($_POST['nome'])) {$nome = mysqli_real_escape_string($conn, $_POST['nome']);}

$email = mysqli_real_escape_string($conn, $_POST['email']);



$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);


$data_nascimento = mysqli_real_escape_string($conn, $_POST['data_nascimento']);


$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);


$genero = mysqli_real_escape_string($conn, $_POST['genero']);


$endereco = mysqli_real_escape_string($conn, $_POST['endereco']);


$senha = mysqli_real_escape_string($conn, $_POST['senha']);
// Validar os dados
// ...
?>


if (isset($_POST['cargo'])) {
  $cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
}