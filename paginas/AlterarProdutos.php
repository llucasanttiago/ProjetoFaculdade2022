<?php
session_start();
include_once('conexao.php');

$sql = "SELECT * FROM produtos ORDER BY idproduto DESC";

$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Produtos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <style>
            .tabela-lista{
                margin: auto 0;
            }

            table{
                background: rgba(0,0,0,0.5);
                padding: 5px;
                text-align: center;
                border: 1px solid black;
                border-radius: 3px;
                align-items: center;
                margin: 10px auto;
            }

            th{
                padding: 10px;
                border: 1px solid black;
            }

            td{
                border: 1px solid black;
                padding: 5px;
            }

            .img-acoes-alterar img{
                width: 20px;
                background: blue;
                border-radius: 3px;
            }

            .img-acoes-lixeira img{
                width: 20px;
                background: red;
                border-radius: 3px;
            }

            

            
        </style>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="../imagens/logo.png" alt="logo">
                </div>
            </div>
        </header>        
            <div class="tabela-lista">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Codigo</th>
                            <th>Nome</th>
                            <th>Descrições</th>
                            <th>Marca</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" .$user_data['idproduto']."</td>";
                                echo "<td>" .$user_data['codigo']."</td>";
                                echo "<td>" .$user_data['nome']."</td>";
                                echo "<td>" .$user_data['descricao']."</td>";
                                echo "<td>" .$user_data['marca']."</td>";
                                echo "<td>" .$user_data['preco']."</td>";
                                echo "<td>
                                    <a class='img-acoes-alterar' href='AlterarProdutosFrm.php?idproduto=$user_data[idproduto]'><img src='../imagens/pencil.png'></a>

                                </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        <footer>
            <p>Loja sport - São Paulo - 2022</p>
        </footer>
    </body>
</html>
