<?php

include('../database.php');

$nome= $_POST['nome'];
$endereco= $_POST['endereco'];
$cpf= $_POST['cpf'];
$telefone= $_POST['telefone'];

$query = "INSERT INTO servico.cliente (nome, endereco, telefone, cpf) VALUES ('$nome','$endereco', $telefone',$cpf')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
