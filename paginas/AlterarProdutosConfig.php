<?php

    include_once('conexao.php');

    if(isset($_POST['update'])){
        $idcliente = $_POST["idproduto"];
        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $marca = $_POST["marca"];
        $preco = $_POST["preco"];

        $sqlUpdate = "UPDATE produtos SET codigo='$codigo',nome='$nome',descricao='$descricao',marca='$marca',preco='$preco' WHERE idproduto='$idproduto'";

        $result = $mysqli->query($sqlUpdate);
    }

    header('Location: AlterarProdutosFrm.php');

?>