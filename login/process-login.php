<?php
//Chamada para o arquivo de conexão com o BD.
include("../configuration/new_connection.php");

// Coletar os dados do formulário
$endereco_email = mysqli_real_escape_string($conn, $_POST['endereco_email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

//Monta e executa uma consulta SQL.
$SQL = "SELECT senha FROM usuario WHERE endereco_email = '$endereco_email';";
$consulta = mysqli_query($conn, $SQL);
//Verifica se a consulta deu certo e retorna algo.
if ($consulta) {

    //Recebe os dados consultados do BD.
    $linha = mysqli_fetch_assoc($consulta);
    $senhaBD = $linha["senha"];

    //Verifica se a senha do usuário é igual a do BD.
    if ($senha == $senhaBD) {
        //Verfica se existe a sessão de usuário
        if (!isset($_SESSION)) {
            //Caso não exista uma sessão, abre uma sessão
            session_start();
        }
        //Fecha a conexão com o BD.
        mysqli_close($conn);
        //Armazenar o cpf do usuário em uma variável de sessão.
        $_SESSION['cpf'] = $cpf;
        echo "<script>alert('OK');</script>";
        //Redireciona o usuário para a sessão restrita 
        header("location: ../session/dashboard.php");
    } else {
        //Fecha a conexão com o BD.
        mysqli_close($conn);
        //Retorna pro usuário uma mensagem de erro.
        //$retorno = "Suas informações não conferem!!!";
        //header("location: form-login.php?retorno=" . $retorno);
    }
} else {
    //Fecha a conexão com o BD.
    mysqli_close($conn);
    //Retorna pro usuário uma mensagem de erro.
    //$retorno = "Suas informações não conferem!!!";
    //header("location: form-login.php?retorno=" . $retorno);
}
?>