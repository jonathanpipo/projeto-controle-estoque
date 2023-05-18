<?php

//chamada de inclusão do arquivo de conexão com o Bd.
include("../configuration/connection.php");

//Recuperar o ID do usuario via metodo GET.
$id = $_GET["id"];

//Instrucão que faz a exclusão logica do usuario.
$SQL = "UPDATE usuario SET ativo = 0 WHERE id = $id;";

//executar a instrucão SQL e pegar o resultado.
if (mysqli_query($connect, $SQL)) {

     //fecha a conexão com o BD
     mysqli_close($connect);


     //Cria uma mensagem de retorno da operacão.
    $retorno = "O usuario foi excluido com sucesso!!!";


    //Redireciona o usuário.
header("location: process-list-users.php?retorno=" . $retorno);

}else{

    //fecha a conexão com o BD.
    mysqli_close($connect);
    
    $retorno = "não foi possivel excluir o usuario";


    header("location: process-list-users.php?retorno=" . $retorno);

    
}






?>