<?php
//Chamada de inclusão do arquivo de conexão com o BD.
include("../configuration/connection.php");

//Receber os dados passados via método POST.
$id = $_POST ["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["data_nascimento"];
$cep = $_POST["cep"];
$codigoArea = $_POST["codigo_area"];
$celular = $_POST["numero_celular"];
$email = $_POST["endereco_email"];


//Instrucão SQL que atualiza os dados do usuário.
// Da esquerda é o nome igual ao BD e da direita o nome da variavel.
 $SQL = "UPDATE usuario 
        SET nome = '$nome',
            cpf = '$cpf',
            data_nascimento = '$dataNascimento',
            cep = '$cep',
            codigo_area = '$codigoArea',
            numero_celular = $celular,
            endereco_email = '$email'
        WHERE id = '$id';";

if (mysqli_query($connect, $SQL)) {

    //fecha a conexão com o BD
    mysqli_close($connect);


    //Cria uma mensagem de retorno da operacão.
   $retorno = "As informacões foram atualizadas com sucesso!!!";


   //Redireciona o usuário.
   header("location: process-list-users.php?retorno=" . $retorno . "&id=" . $id);

}else{

   //fecha a conexão com o BD
   mysqli_close($connect);


   //Cria uma mensagem de retorno da operacão.
  $retorno = "Não foi possivel alterar as informacãos do usuário!!!";


  //Redireciona o usuário.
    header("location: process-list-users.php?retorno=" . $retorno . "&id=" . $id);

   
}
?>