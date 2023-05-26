<?php
//Chama o arquivo de conexão com o BD.
include("../configuration/new_connection.php");

// Coletar os dados do formulário
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
$data_nascimento = mysqli_real_escape_string($conn, $_POST['data_nascimento']);
$cep = mysqli_real_escape_string($conn, $_POST['cep']);
$codigo_area = mysqli_real_escape_string($conn, $_POST['codigo_area']);
$numero_celular = mysqli_real_escape_string($conn, $_POST['numero_celular']);
$endereco_email = mysqli_real_escape_string($conn, $_POST['endereco_email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


// Executar a consulta SQL
$sql = "INSERT INTO usuario (nome, cpf, data_nascimento, cep, codigo_area, numero_celular, endereco_email, senha) VALUES ('$nome', '$cpf', '$data_nascimento', '$cep', '$codigo_area', '$numero_celular', '$endereco_email', '$senha')";

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