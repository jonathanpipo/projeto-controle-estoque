<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");

$nome_produto = $_POST["nome_produto"];
$quantidade_estoque = $_POST["quantidade_estoque"];

$SQL = "INSERT INTO produto (nome_produto,
                             quantidade_estoque)
                            VALUES ('". $nome_produto ."',
                                    '". $quantidade_estoque ."');";

                                    if (mysqli_query($connect, $SQL)) {
                                        
                                        mysqli_close($connect);
                                        
                                        $retorno = "Produto Cadastrado";
                                       header("location:../dashboard.php?retorno=". $retorno);
                                    }else{
                                        
                                        mysqli_close($connect);
                                                                                                                                                                                                                                                                           $retorno = "Não foi possivel cadastrar o produto";
                                      header("location:form-estoque.php?retorno=". $retorno);
                                    }

    ?>