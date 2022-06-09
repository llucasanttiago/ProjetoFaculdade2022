<?php

include_once('conexao.php');
$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];

$result = "INSERT INTO produtos ( codigo, nome, descricao, marca, preco) values ('$codigo', '$nome', '$descricao', '$marca', '$preco')";
       
$resultado = mysqli_query($mysqli, $result);

if($resultado == true){
    echo "Cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar!";
}
?>