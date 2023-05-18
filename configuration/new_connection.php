<?php
// Conectar-se ao banco de dados
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'estoque';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Coletar os dados do formulário
$cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
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