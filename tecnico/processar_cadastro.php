<?php

include('../database.php');

$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$endereço= $_POST['endereco'];
$telefone= $_POST['telefone'];

$query = "INSERT INTO servico.atendente (nome,cpf,endereco, telefone) VALUES ('$nome','$cpf','$endereço','$telefone')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
