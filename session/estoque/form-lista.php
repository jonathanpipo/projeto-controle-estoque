<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../CSS/est.css" rel="stylesheet">

    <!-- Link referencia para fonts do Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Link de referência do CSS de Icones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../../CSS/form-lista.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg body">
        <div class="container-fluid">
            <a class="navbar-brand text-light ahover" href="#"><img src="../../img/boxicon.png" class="ahover" style="width: 59px; height: 59px;"> Box Vault</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="navbar-nav">
                <a class="nav-link text-light" href="../dashboard.php">Dashboard</a>
                <a class="nav-link text-light" href="form-estoque.php">Cadastrar Produto</a>
                <a class="nav-link text-light" href="form-entrada.php">Entrada Produto</a>
                <a class="nav-link text-light" href="form-lista.php">Lista Produtos</a>
                <a class="nav-link text-light" href="form-saida.php">Saida Produto</a>

            </div>
        </div>
    </nav>

    <div class="container-principal">
        <!-- Titulo -->
        <h1 class="titulo">Controle de Estoque</h1>
        
        <!-- Botoes NAO UTILIZANDO 
        <div class="botoes">
            <button class="button">Entrada</button>  
            <button class="button1">Saida</button>
            <button class="button2">Adicionar</button>
        </div>
        --->
    </div>


    <!-- Tabela de produtos -->
    <section class="container py-5">
        <div class="row justify-content-center">

            <!-- Captura e apresenta os retornos para o usuario -->
            <div class="row">
                <div class="text-center">
                    <?php
                        //Capturar a mensagem de reotrno via metodo GET.
                        $retorno = $GET["retorno"];

                        //Verifica se existe um retorno e o apresenta.
                        if(isset($retorno)){

                            //Apresenta o conteudo do retorno
                            print($retorno);
                        }
                    ?>
                </div>
            </div>
        

                <table>
                    <!-- Cabeçalho -->
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>

                    <!-- Corpo da tabela -->
                    <tbody>
                        <?php
                        //Chamada de inclusão do arquivo de conexão co o BD
                        include("../../configuration/new_connection.php");

                        //Instrução SQL de seleção dos usuarios.
                        $SQL = "SELECT id, nome_produto, quantidade_estoque FROM produto WHERE ativo = 1;";

                        //Executa a consulta SQL.
                        $consulta = mysqli_query($conn,$SQL);

                        //Verifica se existem retornos na consulta SQL.
                        if (mysqli_num_rows($consulta) > 0){

                            //Laço de repetição dos usuarios.
                            //Apresenta todos os usuarios do BD.
                            while ($estoque = mysqli_fetch_assoc($consulta)){
                                ?>
                                
                                <tr>
                                    <td scope="row" ><?php print($estoque["id"]); ?></td>
                                    <td style="border-style:solid"><?php print($estoque["nome_produto"]); ?></td>
                                    <td><?php print($estoque["quantidade_estoque"]); ?></td>
                                    <td><a href="form-edit-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-pencil-square"></i></a></td>
                      <td><a href="process-delete-produto.php?id=<?php print($estoque["id"]); ?>"><i class="bi bi-trash3-fill"></i></a></td>
                                </tr>
                                <?php
                            }

                            //Fecha a conexão com o BD.
                            mysqli_close($conn);

                        }else{
                            //Retorna a mensagem para o usuario.
                            print("Não existem usuarios cadastrados no banco de dados.");

                            //Fecha a conexão com o BD.
                            mysqli_close($conn);
                        }
                        ?>

                    </tbody>
                </table> 
            </div>     
        </div>
    </section>
    

    <!-- Script dos botões NAO UTILIZANDO        
    <script>
        const button = document.querySelector(".button");

        button.addEventListener("click", (e) => {
            e.preventDefault();
            button.classList.add("animate");
            
            setTimeout(() => {
                button.classList.remove("animate");
            }, 600) //1s = 1000ms
        });
    </script>

    <script>
        const button1 = document.querySelector(".button1");

        button1.addEventListener("click", (e) => {
            e.preventDefault();
            button1.classList.add("animate");
            
            setTimeout(() => {
                button1.classList.remove("animate");
            }, 600) //1s = 1000ms
        });
    </script>

    <script>
        const button2 = document.querySelector(".button2");

        button2.addEventListener("click", (e) => {
            e.preventDefault();
            button2.classList.add("animate");
            
            setTimeout(() => {
                button2.classList.remove("animate");
            }, 600) //1s = 1000ms
        });
    </script>
    --->
    
</body>
</html>