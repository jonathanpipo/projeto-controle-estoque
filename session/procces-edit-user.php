<?php
//Chamada de inclusão do arquivo de conexão com o BD.
include("../configuration/connection.php");

//Receber os dados passados via método POST.
$id = $_POST ["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dataNascimento"];
$genero = $_POST["genero"];
$cep = $_POST["cep"];
$logradouro = $_POST["logradouro"];
$complemento = $_POST["complemento"];
$numeroResidencia = $_POST["numeroResidencia"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$codigoArea = $_POST["codigoArea"];
$celular = $_POST["numero_celular"];
$email = $_POST["endereco_email"];


//Instrucão SQL que atualiza os dados do usuário.
// Da esquerda é o nome igual ao BD e da direita o nome da variavel.
$SQL = "UPDATE usuario 
        SET nome = '$nome',
            cpf = '$cpf',
            data_nascimento = '$dataNascimento',
            genero = '$genero',
            cep = '$cep',
            logradouro = '$logradouro',
            complemento = '$complemento',
            numero_residencia = '$numeroResidencia',
            bairro = '$bairro',
            cidade = '$cidade',
            estado = '$estado',
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
   header("location: form-edit-user.php?retorno=" . $retorno . "&id=" . $id);

}else{

   //fecha a conexão com o BD
   mysqli_close($connect);


   //Cria uma mensagem de retorno da operacão.
  $retorno = "Não foi possivel alterar as informacãos do usuário!!!";


  //Redireciona o usuário.
    header("location: form-edit-user.php?retorno=" . $retorno . "&id=" . $id);

   
}
?>