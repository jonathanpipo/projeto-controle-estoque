<?php
   //Arquivo de conexão com o banco de dados.
   include("../../configuration/connection.php");

   //Informaçoes passadas pelo formulário.
   $id = $_POST["produto"];
   $quantidade_entrada = $_POST["quantidade_entrada"];

   //Instrução SQL que faz o lançamento da entrada de produtos.
   print $SQLEntrada = "INSERT INTO entrada (id_produto,
                                       data_entrada,
                                       quantidade_entrada,
                                       ativo)
                              VALUES ('". $id ."',
                                      NOW(),
                                      '". $quantidade_entrada."',
                                      1);";

   //Executa a instrução SQL que registra a entrada de produtos.                                   
   if (mysqli_query($connect, $SQLEntrada)) {

      //Instrução que aumenta a quantidade de estoque do produto no banco de dados.
      print $SQLProduto = "UPDATE produto SET 
                            quantidade_estoque = quantidade_estoque + $quantidade_entrada
                     WHERE id = $id;";
      //Executa a instrução SQL que aumenta a quantidade de produtos em estoque.                                   
      if (mysqli_query($connect, $SQLProduto)) {
         //fecha a conexão com o BD
         mysqli_close($connect);
         //Cria uma mensagem de retorno da operacão.
         $retorno = "Produtos adicionados com sucesso!!!";
         //Redireciona o usuário.
         header("location: ../dashboard.php?retorno=" . $retorno);   
      }else{

         //fecha a conexão com o BD
         mysqli_close($connect);

         //Cria uma mensagem de retorno da operacão.
         $retorno = "Não foi possivel processar a entrada de produto!!!";

         //Redireciona o usuário.
         header("location: ../dashboard.php?retorno=" . $retorno);
      }
   }else{

      //fecha a conexão com o BD
      mysqli_close($connect);

      //Cria uma mensagem de retorno da operacão.
      $retorno = "Não foi possivel processar a entrada de produto!!!";

      //Redireciona o usuário.
      header("location: ../dashboard.php?retorno=" . $retorno);
   }
?>