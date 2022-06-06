<?php

include_once('conexao.php');
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["genero"];
$data_nasc = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];

$result = "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')";

$resultado = mysqli_query($mysqli, $result);

if($resultado == true){
    echo "Cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar!";
}
?>

