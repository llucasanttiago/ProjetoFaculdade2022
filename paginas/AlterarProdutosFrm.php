<?php

    if(!empty($_GET['idproduto']))
    {
        include_once('conexao.php');

        $idproduto = $_GET['idproduto'];

        $sqlSelect = "SELECT * FROM produtos WHERE idproduto=$idproduto";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $codigo = $user_data["codigo"];
                $nome = $user_data["nome"];
                $descricao = $user_data["descricao"];
                $marca = $user_data["marca"];
                $preco = $user_data["preco"];
            }
            
        } else {
            header('Location: AlterarProdutos.php');
        }
    } 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Alterar Produto</title>
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
                    <form action="AlterarProdutosConfig.php" method="POST">
                            <fieldset>
                                <legend><b>Formulário de Produtos</b></legend>

                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="codigo" name="codigo" placeholder="Codigo do produto" value="<?php echo $codigo ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome ?>"required>
                                </div>      
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="descricao" name="descricao" placeholder="Descrições" value="<?php echo $descricao ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="marca" name="marca" placeholder="Marca" value="<?php echo $marca ?>" required>
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="preco" name="preco" placeholder="Preço" value="<?php echo $preco ?>" required>
                                </div>
                                <br>
                                <input type="hidden" name="idproduto" value="<?php echo $idproduto ?>">
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
