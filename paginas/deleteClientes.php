<?php

    if(!empty($_GET['idcliente']))
    {
        include_once('conexao.php');

        $idcliente = $_GET['idcliente'];

        $sqlSelect = "SELECT * FROM cliente WHERE idcliente=$idcliente";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente WHERE idcliente=$idcliente";
            $resultDelete = $mysqli->query($sqlDelete);
            
            
        }
    }
    header('Location: DeletarClientes.php');
?>