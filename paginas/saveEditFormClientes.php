<?php

    include_once('conexao.php');

    if(isset($_POST['update'])){

        $idcliente = $_POST['idcliente'];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $endereco = $_POST["endereco"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];

        $sqlUpdate = "UPDATE cliente SET nome='$nome',cpf='$cpf',rg='$rg',endereco='$endereco',celular='$celular',email='$email' WHERE idcliente='$idcliente'";

        $result = $mysqli->query($sqlUpdate);
    }

    header('Location: ListaClientes.php');

?>