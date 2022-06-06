<?php
session_start();
include_once('conexao.php');

$sql = "SELECT * FROM cliente ORDER BY idcliente DESC";

$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Clientes</title>
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

            .img-acoes img{
                width: 20px;
                background: blue;
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
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Endereço</th>
                            <th>Celular</th>
                            <th>E-mail</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" .$user_data['idcliente']."</td>";
                                echo "<td>" .$user_data['nome']."</td>";
                                echo "<td>" .$user_data['cpf']."</td>";
                                echo "<td>" .$user_data['rg']."</td>";
                                echo "<td>" .$user_data['endereco']."</td>";
                                echo "<td>" .$user_data['celular']."</td>";
                                echo "<td>" .$user_data['email']."</td>";
                                echo "<td>
                                    <a class='img-acoes' href='frmDeCadastroDeClientesEdit.php?idcliente=$user_data[idcliente]'><img src='../imagens/pencil.png'></a>
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
