<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Produtos</title>
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
                        <form action="CadastroDeProdutosConfig.php" method="POST">
                            <fieldset>
                                <legend><b>Formulário de Produtos</b></legend>

                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="codigo" name="codigo" placeholder="Codigo do Produto">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="nome" name="nome" placeholder="Nome">
                                </div>      
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="descricao" name="descricao" placeholder="Descrições">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="marca" name="marca" placeholder="Marca">
                                </div>
                                <br>
                                <div class="input-cadastro-clientes">
                                    <input type="text" class="inputNome" id="preco" name="preco" placeholder="Preço">
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
