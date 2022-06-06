<!DOCTYPE html>
<html>
    <head>
        <title>Pesquisar Clientes</title>
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
        
            <form action="../php/pesquisarClientes.php" method="POST">
                <label for="nome">Digite o nome do clientes: </label>
                <input type="text" id="nome" name="nome">
                <input name="pesquisarPorNome" type="submit" value="Pesquisar">
            </form>
        
        <footer>
            <p>Loja sport - São Paulo - 2022</p>
        </footer>
    </body>
</html>
