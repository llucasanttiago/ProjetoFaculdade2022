<?php 

include('./paginas/conexao.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="imagens/logo.png" alt="logo">
                </div>
            </div>
        </header>

        <section class="tela-login">
            <div class="container">
                <div class="login">
                    <h2>Login</h2>
                    <form action="paginas/LoginPhp.php" method="POST">
                        <br>
                        <input type="text" name="email" id="input-login" placeholder="Email">
                        <br><br>
                        <input type="password" name="senha" id="input-login" placeholder="Senha">
                        <br><br>
                        <input type="submit" name="submit" class="button-login" value="Entrar">
                        <br><br>                        
                    </form>
                    <a href="paginas/frmCadastroDeLogin.php"><button class="button-login">Cadastrar</button></a>
                </div>
            </div>            
        </section>

        <footer>
            <p>Loja sport - São Paulo - 2022</p>
        </footer>
    </body>
</html>