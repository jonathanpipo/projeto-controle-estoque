<?php
//Chamada de inclusão do arquivo de conexão conm o BD.

include("../configuration/connection.php");

//Chamada para o arquivo que verifica se o usuario esta logado
include("../configuration/userSession.php");


//Recupera o ID do usuário via método GET. 
$id = $_GET["id"];

//Instrucão SQL que puxa os dados do usuário.
$SQL = "SELECT nome, cpf, data_nascimento, genero, cep, logradouro, 
        complemento, numero_residencia, bairro, cidade, estado,
        codigo_area, numero_celular, endereco_email
        FROM usuario
        WHERE id = $id;";

//Executa a instrucão SQL.
$consulta = mysqli_query($connect, $SQL);

$usuario = mysqli_fetch_assoc($consulta);

?>
<?php

include("../../configuration/connection.php");
include("../../configuration/userSession.php");

$SQL = "SELECT nome_produto
        FROM produto;";
?>