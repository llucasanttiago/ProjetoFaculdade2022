<?php

    if(!empty($_GET['idproduto']))
    {
        include_once('conexao.php');

        $idproduto = $_GET['idproduto'];

        $sqlSelect = "SELECT * FROM produtos WHERE idproduto=$idproduto";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produtos WHERE idproduto=$idproduto";
            $resultDelete = $mysqli->query($sqlDelete);
            
            
        }
    }
    header('Location: DeletarProdutos.php');
?>