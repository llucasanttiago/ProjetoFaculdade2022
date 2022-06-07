<?php

if(!empty($_GET['idcliente']))
{
    include_once('conexao.php');

        $idcliente = $_GET['idcliente'];

        $sqlSelect = "SELECT * FROM cliente WHERE idcliente=$idcliente";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
            {

            
            {
                $nome = $user_data["nome"];
                $cpf = $user_data["cpf"];
                $rg = $user_data["rg"];
                $endereco = $user_data["endereco"];
                $celular = $user_data["celular"];
                $email = $user_data["email"];
            }
}
}

header('Location: ListaClientes.php');


?>