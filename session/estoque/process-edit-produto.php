<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");
   
$id = $_POST ["id"];
$nome_produto = $_POST["nome_produto"];
$quantidade_estoque = $_POST["quantidade_estoque"];

 $SQL = "UPDATE produto     
        SET nome_produto = '$nome_produto',
            quantidade_estoque = '$quantidade_estoque' 
        WHERE id = '$id';";

                                    if (mysqli_query($connect, $SQL)) {
                                        
                                        mysqli_close($connect);
                                        
                                        $retorno = "Produto editado";
                                        header("location:../dashboard.php?retorno=". $retorno . "&id=" . $id);
                                    }else{
                                        
                                        mysqli_close($connect);
                                                                                                                                                                                                                                                                           $retorno = "Não foi possivel cadastrar o produto";
                                        header("location:../dashboard.php?retorno=". $retorno . "&id=" . $id);
                                    }

    ?>