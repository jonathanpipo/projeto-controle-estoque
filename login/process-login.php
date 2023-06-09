<?php
    //Chamada para o arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //Recupera os dados via método POST.
    $email = $_POST["email"];
    $senha = SHA1($_POST["senha"]);

    //Monta e executa uma consulta SQL.
    print $SQL = "SELECT senha FROM usuario WHERE endereco_email = '$email'AND ativo = 1;";
    $consulta = mysqli_query($connect, $SQL);

    //Verifica se a consulta deu certo e retorna algo.
    if($consulta){

        //Recebe os dados consultados do BD.
        $linha = mysqli_fetch_assoc($consulta);
        $senhaBD = $linha["senha"];

        //Verifica se a senha do usuário é igual a do BD.
        if($senha == $senhaBD){

            

            //Verfica se existe a sessão de usuário
            if(!isset($_SESSION)){


                //Caso não exista uma sessão, abre uma sessão
                session_start();
            }
            //Fecha a conexão com o BD.
            mysqli_close($connect);


        //Armazenar o email do usuário em uma variável de sessão.
        $_SESSION['usuarioEmail'] = $email;

            //Redireciona o usuário para a sessão restrita 
           header("location: ../session/dashboard.php ");
        }else{

            //Fecha a conexão com o BD.
            mysqli_close($connect);
            
            //Retorna pro usuário uma mensagem de erro.
            $retorno = "Suas informações não conferem!!!";
         header("location: form-login.php?retorno=" . $retorno);
        }
    }else{

        //Fecha a conexão com o BD.
        mysqli_close($connect);

        //Retorna pro usuário uma mensagem de erro.
        $retorno = "Suas informações não conferem!!!";
        header("location: form-login.php?retorno=" . $retorno);
    }
?>