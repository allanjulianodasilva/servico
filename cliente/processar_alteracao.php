<?php

include('../database.php');

$id= $_POST['id'];
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$endereco= $_POST['endereco'];
$telefone= $_POST['telefone'];S

$query = "UPDATE servico.cliente SET nome='$nome',endereco='$endereco',telefone='$telefone', 'Scpf='$cpf' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
