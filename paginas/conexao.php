<?php

$usuario = 'root';
$senha = '1234';
$database = 'sistemaprojeto';
$host ='localhost:3307';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>