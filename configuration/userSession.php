<?php

//Verifica se a sessão de usuario existe
if(!isset($_SESSION)){


    //Caso ela não exite, cria a sessão de usuario.
    session_start();

    //Verifica se o usuario fez o login
    if(!isset($_SESSION["usuarioEmail"])){
        

        //Caso o usuario não tenha feito o login, rediciona ele para o login
        header("Location:../login/form-login.php");
    }
}


?>