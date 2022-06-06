<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Login</title>
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
                    <div class="formulario-login">
                        <form action="../php/cadastroLogin.php" method="POST">
                            <fieldset>
                                <legend><b>Formulário de cadastro</b></legend>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="text" name="nome" id="nome" class="inputNome" placeholder="Nome completo" required>
                                </div>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="text" name="email" id="email" class="inputNome" placeholder="E-mail" required>
                                </div>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="password" name="senha" id="senha" class="inputNome" placeholder="Senha" required>
                                </div>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="tel" name="telefone" id="telefone" class="inputNome" placeholder="Telefone" required>
                                </div>
                                <p>Sexo:</p>
                                <input type="radio" id="feminino" name="genero" value="feminino" required>
                                <label for="feminino">Feminino</label>
                                <input type="radio" id="masculino" name="genero" value="masculino" required>
                                <label for="masculino">Masculino</label>
                                <input type="radio" id="outro" name="genero" value="outro" required>
                                <label for="outro">Outro</label>
                                <br><br>
                                <div class="input-cadastro-login">
                                    <label for="data_nascimento"><b>Data de nascimento: </b></label>
                                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputNome" required>
                                </div>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="text" name="cidade" id="cidade" class="inputNome" placeholder="Cidade" required>
                                </div>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="text" name="estado" id="estado" class="inputNome" placeholder="Estado" required>
                                </div>
                                <br>
                                <div class="input-cadastro-login">
                                    <input type="text" name="endereco" id="endereco" class="inputNome" placeholder="Endereço" required>
                                </div>
                                <br>
                                <input type="submit" name="submit" id="submit" value="Enviar">
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