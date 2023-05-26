<?php
//Chamada de inclusão do arquivo de conexão conm o BD.
include("../configuration/new_connection.php");

//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter os valores dos inputs
        $nome = $_POST["nome"];
        $quantidade_itens = $_POST["quantidade_itens"];
        $quantidade_total_vendidos = $_POST["quantidade_total_vendidos"];
        $valor_compra = $_POST["valor_compra"];
        $valor_venda = $_POST["valor_venda"];


        // Comando SQL para inserir registro na tabela
        $sql = "INSERT INTO produto (nome, quantidade_itens, quantidade_total_vendidos, valor_compra, valor_venda)
                VALUES ('$nome', '$quantidade_itens', '$quantidade_total_vendidos', '$valor_compra', '$valor_venda')";

        // Executar o comando SQL e verificar se foi bem-sucedido
        if ($conn->query($sql) === TRUE) {
                echo "Registro inserido com sucesso!";
        } else {
                echo "Erro ao inserir registro: " . $conn->error;
        }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>