<?php
//Chamada de inclusão do arquivo de conexão conm o BD.
include("../configuration/new_connection.php");

//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter os valores dos inputs
        $nome_produto = $_POST["nome_produto"];
        $quantidade_entrada = $_POST["quantidade_entrada"];

        // Comando SQL para inserir registro na tabela
        $sql = "INSERT INTO entrada (quantidade_entrada, nome_produto)
                VALUES ('$quantidade_entrada', '$nome_produto')";

        // Executar o comando SQL e verificar se foi bem-sucedido
        if ($conn->query($sql) === TRUE) {
                echo "Registro inserido com sucesso!";
        } else {
                echo "Erro ao inserir registro: " . $conn->error;
        }
}

// Fechar a conexão com o banco de dados
$conn->close();

header("location: ../session/dashboard.php");

?>