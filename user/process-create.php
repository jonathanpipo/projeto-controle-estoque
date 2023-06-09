<?php
//Chama o arquivo de conexão com o BD.
include("../configuration/connection.php");

//Variáveis que irão receber os dados via POST do formulário.
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dataNascimento"];
$cep = $_POST["cep"];
$codigoArea = $_POST["codigoArea"];
$celular = $_POST["numero_celular"];
$email = $_POST["endereco_email"];
$senha = $_POST["senha"];
$confirmaSenha = $_POST["confirmaSenha"];


//Instrução que verifica se o cpf ja existe no banco de dados
$SQLverificaCPF = "SELECT cpf FROM usuario WHERE cpf ='$cpf';"; 

//Executa a consulta do CPF
$consultaCPF = mysqli_query($connect, $SQLverificaCPF);

//Verifica se houve retorno da consulta ao banco de dados
if (mysqli_num_rows($consultaCPF) > 0) {

     //Encerra a conexão com o BD.
     mysqli_close($connect);

     //Redireciona a página para o login.
     $retorno = "Usuário já cadastrado !!!";
     header("location: ../login/form-creat.php?retorno=" . $retorno);
    
}else{

//verifica se o usuario criou a senha corretamente
if ($senha == $confirmaSenha) {

    //Instrução SQL de inserção de dados no BD.
    $SQL = "INSERT INTO usuario (nome, 
            cpf, 
            data_nascimento,  
            cep,
            codigo_area, 
            numero_celular, 
            endereco_email, 
            senha, 
            ativo)
            VALUES ('" . $nome . "', 
            '" . $cpf . "', 
            '" . $dataNascimento . "', 
            '" . $cep . "', 
            '" . $codigoArea . "', 
            '" . $celular . "', 
            '" . $email . "', 
            SHA1('" . $senha . "'),
            1);";



    //Faz a tentativa de inserção dos dados no BD.
    if (mysqli_query($connect, $SQL)) {

        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Usuário cadastrado com sucesso!!!";
        header("location: ../login/form-login.php?retorno=" . $retorno);
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        header("location: form-create.php?retorno=" . $retorno);
    }
}else{
    mysqli_close($connect);

     //Redireciona a página para o login.
     $retorno = "O campo senha e confirmar senha não conferem !!!";
     header("location: ../login/form-login.php?retorno=" . $retorno);
}


}


?>