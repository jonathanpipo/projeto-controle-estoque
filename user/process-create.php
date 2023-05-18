<?php
//Chama o arquivo de conexão com o BD.
include("../configuration/new_connection.php");

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

// Executar a consulta SQL
$sql = "INSERT INTO funcionario (cargo, nome, email, cpf, data_nascimento, telefone, genero, endereco, senha) VALUES ('$cargo', '$nome', '$email', '$cpf', '$data_nascimento', '$telefone', '$genero', '$endereco', '$senha')";

// Insercao de dados
if (mysqli_query($conn, $sql)) {
    header("location: ../login/form-login.php" . $retorno);
    $retorno = "Dados inseridos com sucesso!";
    // Imprime o código JavaScript na página com a mensagem
    echo "<script>alert('$retorno');</script>";
    //retorna para a página de login

} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);

}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>