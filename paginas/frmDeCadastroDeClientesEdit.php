<?php

    if(!empty($_GET['idcliente']))
    {
        include_once('conexao.php');

        $idcliente = $_GET['idcliente'];

        $sqlSelect = "SELECT * FROM cliente WHERE idcliente=$idcliente";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data["nome"];
                $cpf = $user_data["cpf"];
                $rg = $user_data["rg"];
                $endereco = $user_data["endereco"];
                $celular = $user_data["celular"];
                $email = $user_data["email"];
            }
            
        } else {
            header('Location: ListaClientes.php');
        }
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
                    <form action="saveEditFormClientes.php" method="POST">
                            <fieldset>
                                <legend><b>Formulário de Clientes</b></legend>

                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $cpf ?>"required>
                                </div>      
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="rg" name="rg" placeholder="RG" value="<?php echo $rg ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="endereco" name="endereco" placeholder="Endereço" value="<?php echo $endereco ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="celular" name="celular" placeholder="Celular" value="<?php echo $celular ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="email" name="email" placeholder="E-mail" value="<?php echo $email ?>" required>
                                </div>
                                <br>
                                <input type="hidden" name="idcliente" value="<?php echo $idcliente ?>">
                                <input type="submit" name="update" id="update">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <footer>
            <p>Loja sport - São Paulo - 2022</p>
        </footer>
    </body>
</html>
