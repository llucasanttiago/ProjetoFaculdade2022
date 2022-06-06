<?php

include_once('conexao.php');
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$endereco = $_POST["endereco"];
$celular = $_POST["celular"];
$email = $_POST["email"];

$result = "INSERT INTO cliente (nome, cpf, rg, endereco, celular, email) values ('$nome', '$cpf', '$rg', '$endereco', '$celular', '$email')";
       
$resultado = mysqli_query($mysqli, $result);

if($resultado == true){
    echo "Cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar!";
}
?>