<?php
   //Arquivo de conexão com o banco de dados.
   include("../../configuration/connection.php");

   //Informaçoes passadas pelo formulário.
   $id = $_POST["produto"];
   $quantidade_saida = $_POST["quantidade_saida"];

   //Instrução SQL que faz o lançamento da saida de produtos.
   print $SQLSaida = "INSERT INTO saida (id_produto,
                                       data_saida,
                                       quantidade_saida,
                                       ativo)
                              VALUES ('". $id ."',
                                      NOW(),
                                      '". $quantidade_saida."',
                                      1);";

   //Executa a instrução SQL que registra a saida de produtos.                                   
   if (mysqli_query($connect, $SQLSaida)) {

      //Instrução que diminui a quantidade de estoque do produto no banco de dados.
      print $SQLProduto = "UPDATE produto SET 
                            quantidade_estoque = quantidade_estoque - $quantidade_saida
                     WHERE id = $id;";

      //Executa a instrução SQL que diminui a quantidade de produtos em estoque.                                   
      if (mysqli_query($connect, $SQLProduto)) {

         //fecha a conexão com o BD
         mysqli_close($connect);

         //Cria uma mensagem de retorno da operacão.
         $retorno = "Produtos retirados com sucesso!!!";

         //Redireciona o usuário.
         header("location: ../dashboard.php?retorno=" . $retorno);   
      }else{

         //fecha a conexão com o BD
         mysqli_close($connect);

         //Cria uma mensagem de retorno da operacão.
         $retorno = "Não foi possivel processar a saída de produto!!!";

         //Redireciona o usuário.
         header("location: ../dashboard.php?retorno=" . $retorno);
      }

   }else{

      //fecha a conexão com o BD
      mysqli_close($connect);

      //Cria uma mensagem de retorno da operacão.
      $retorno = "Não foi possivel processar a saída de produto!!!";

      //Redireciona o usuário.
      header("location: ../dashboard.php?retorno=" . $retorno);
   }
?>