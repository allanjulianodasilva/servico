<?php

include('../database.php');

$id= $_POST['id'];
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$endereco= $_POST['endereco'];
$telefone= $_POST['telefone'];

$query = "UPDATE servico.cliente SET nome='$nome',endereco='$endereco',telefone='$telefone', cpf='$cpf' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
