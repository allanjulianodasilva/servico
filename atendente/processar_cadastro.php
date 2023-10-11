<?php

include('../database.php');

$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$endereço= $_POST['endereco'];

$query = "INSERT INTO servico.atendente (nome,cpf,endereco) VALUES ('$nome','$cpf','$endereço')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
