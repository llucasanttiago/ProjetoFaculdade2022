<?php

include_once('conexao.php');
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$endereco = $_POST["endereco"];
$celular = $_POST["celular"];
$email = $_POST["email"];

$result = "INSERT INTO cliente (nome, cpf, rg, endereco, celular, email) values ('$nome', '$cpf', '$rg', '$endereco', '$celular', '$email')";
       
$resultado = mysqli_query($mysqli, $result);

if($resultado == true){
    echo "Cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar!";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="../imagens/logo.png" alt="logo">
                </div>
            </div>
        </header>
        <nav class="nav-index">
            <div class="container">
                <div class="menu">
                    <div class="formulario-clientes">
                        <form action="" method="POST">
                            <fieldset>
                                <legend><b>Formulário de Clientes</b></legend>

                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="nome" name="nome" placeholder="Nome">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="cpf" name="cpf" placeholder="CPF">
                                </div>      
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="rg" name="rg" placeholder="RG">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="endereco" name="endereco" placeholder="Endereço">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="celular" name="celular" placeholder="Celular">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="email" name="email" placeholder="E-mail">
                                </div>
                                <br>
                                <input type="submit" id="submit" value="Enviar">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <footer>
            <p>Loja sport - São Paulo - 2022.</p>
        </footer>
    </body>
</html>
